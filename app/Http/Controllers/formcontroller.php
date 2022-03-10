<?php

namespace App\Http\Controllers;
use App\Models\formdata;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class formcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res=formdata::all();
        if($res){
            return view('crud.view',['result'=>$res]);
           
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $name=$request->input('name');
        $age=$request->input('age');
        $gender=$request->input('gender');
        $work=$request->input('work');
        
        $cate=$request->input('category');
        $string = implode(" ",$cate);
         
         
       
       
        $data=array("name"=>$name,"age"=>$age,"gender"=>"$gender","work_yes_no"=>"$work","language"=>"$string");
        $res=DB::table('data')->insert($data);
        if($res){
            echo "<script> alert('inserted')
            window.location.href='/form';</script>";
              
              
           }else{
               echo "erorr";
           }
      


        
      

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = formdata::find($id);
        // var_dump($data);exit;
        return view('afnanviewonetime',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res=DB::select('SELECT * FROM data WHERE id=?',[$id]);
        // var_dump($res);exit;
        return view('crud.edit',['rs'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user=formdata::find($id);
        $user->name=$request->input('name');
        $user->age=$request->input('age');
        $user->gender=$request->input('gender');
        $user->work_yes_no=$request->input('work');
        $cate=$request->input('category');
        $string = implode(" ",$cate);
         
        $user->language=$string;
        $result=$user->save();
        if($result)
        {
            echo "<script> alert('data updated')
            window.location.href='/view';</script>";
        }
      
     
    



    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $data = formdata::findOrFail($id);
            $data->delete();
    
            return redirect('/view')->with('success', 'Data is successfully deleted');
        }
    }
}
