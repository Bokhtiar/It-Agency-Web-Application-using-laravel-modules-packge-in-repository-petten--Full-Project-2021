<?php

namespace Modules\Expenses\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Expenses\Entities\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpensesRepository extends TestCase
{
    public function index()
    {
            return view('expenses::index');
    }//index function end

    public function create()
    {
            return view('expenses::create');
    }//create function end

    public function valid($request){
        $validated = $request->validate([
            'amonut' => 'required',
            'description' => 'required',
        ]);
    }//validation function end

    public function save(Expense $expenses, Request $request){
        $expenses->amonut = $request->amonut;
        $expenses->description = $request->description;
        $expenses->user_id = Auth::id();
        $expenses->save();
    }//save function end

    public function redirect(){
            return redirect('expenses/');
    }//redirect function end

    public function store($id=null, $request){
        if($id){
            $expenses = Expense::find($id);
            $this->save($expenses, $request);
            return $this->redirect();
        }else{
            $this->valid($request);
            $expenses = new Expense;
            $this->save($expenses, $request);
            return $this->redirect();
        }

    }//store end

    public function edit($id){
            $expense = Expense::find($id);
            return view('expenses::edit', compact('expense'));
    }//edit function end

    public function destroy($id){
            $dstroy = Expense::find($id);
            $dstroy->delete();
            return $this->redirect();
    }
}
