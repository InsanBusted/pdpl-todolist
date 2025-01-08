<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;
use App\Services\ValidationHandler;
use App\Services\SaveTodoHandler;
use Illuminate\Support\Facades\Auth;

class todosController extends Controller
{

    public function index() {
        $user = Auth::user();
        $todos= $user->todos;
        return view("welcome", compact('todos'));
    }

    public function create() {
        return view('create');
    }
   

    public function store(Request $request)
    {
        try {
            // Buat handler untuk validasi dan penyimpanan
            $validationHandler = new ValidationHandler();
            $saveTodoHandler = new SaveTodoHandler();

            
            // Hubungkan handler ke dalam chain
            $validationHandler->setNext($saveTodoHandler);
            
            // Eksekusi chain
            $validationHandler->handle($request);
            // dd($validationHandler);
            

            return redirect(route("todo.home"))->with('success', 'Todo successfully added!');
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }


    public function delete($id){
        $todo = todos::findOrFail($id);
        $todo->delete();
        return redirect(route("todo.home"));
    }
 

    public function edit($id)
    {
        $todo = todos::findOrFail($id); // Ambil data todo berdasarkan ID
        return view('update', compact('todo')); 
    }


    public function updateData(Request $request, $id) {
        
           $request->validate([
            'name' => 'required|string|max:255',
            'work' => 'required|string|max:255',
            'prioritas' => 'required|in:"1","2","3"',
            'dueDate' => 'required|date',
            ]);
        
            $todo = todos::findOrFail($id);
            $todo->name = $request->name;
            $todo->work = $request->work;
            $todo->prioritas = $request->prioritas;
            $todo->dueDate = $request->dueDate;
            $todo->save();
    
    
            return redirect(route("todo.home"));
    }
}
