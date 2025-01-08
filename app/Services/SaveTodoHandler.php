<?php


namespace App\Services;

use App\Models\todos;
use Illuminate\Support\Facades\Auth;

// Kelas SaveTodoHandler adalah turunan dari kelas Handler.
class SaveTodoHandler extends Handler
{
    /**
     * Method untuk menangani request dan menyimpan data todo ke database.
     * @param array 
     * @return todos 
     */
    public function handle($request)
    {
        // Membuat instance baru dari model "todos".
        $user = Auth::user();

        // Pastikan pengguna sudah login
        $user = Auth::user();

        if (!$user) {
            throw new \Exception('User Belum Login!');
        }

        $todo = new todos();
        

        $todo->user_id = $user->id;

        // Mengatur atribut "name" dari request ke properti "name" model todos.
        $todo->name = $request['name'];
        
        // Mengatur atribut "work" dari request ke properti "work" model todos.
        $todo->work = $request['work'];
        
        // Mengatur atribut "prioritas" dari request ke properti "prioritas" model todos.
        $todo->prioritas = $request['prioritas'];

        // Mengatur atribut "dueDate" dari request ke properti "dueDate" model todos.
        $todo->dueDate = $request['dueDate'];
        
        // Menyimpan objek todos ke database.
        $todo->save();

       
        return $todo;
    }
}
