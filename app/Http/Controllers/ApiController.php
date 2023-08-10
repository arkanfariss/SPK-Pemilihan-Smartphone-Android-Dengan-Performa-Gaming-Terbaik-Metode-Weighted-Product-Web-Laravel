<?php

namespace App\Http\Controllers;

use App\Http\Resources\DataResource;
use App\Http\Resources\DataShowResource;
use App\Http\Resources\DataCRUD;
use App\Models\Data;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function index(){
        $data = Data::all();
        // return response()->json(['data_smartphone_list' => $data_smartphone]);
        return DataResource::collection($data);
    }
    public function show($id){
        $data_show = Data::findOrFail($id);
        return new DataShowResource($data_show);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'smartphone' => 'required',
            'cpu' => 'required',
            'ram' => 'required',
            'storage' => 'required',
            'layar' => 'required',
            'baterai' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:5120',
        ]);
        $validatedData['image'] = $request->file('image')->store('smartphone-image');
        // dd($validatedData['image']);
        $data_store = Data::create($validatedData);
        new DataCRUD($data_store);
        return response()->json(['message' => 'berhasil store']);
    }
    public function update(Request $request, Data $data, $id){
        $validatedData = $request->validate([
            'smartphone' => 'required',
            'cpu' => 'required',
            'ram' => 'required',
            'storage' => 'required',
            'layar' => 'required',
            'baterai' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:5120',
        ]);
        if ($request->hasFile('image')) {
            // Storage::delete('storage/smartphone-image/' . $data->image);
            $storagedelete = Storage::delete('/public/storage/smartphone-image/' . $data->image);;
        }
        dd($storagedelete);
        $validatedData['image'] = $request->file('image')->store('smartphone-image');
        // dd($validatedData['image']);
        $data_update = Data::findOrFail($id);
        // $data_update = Data::where('id', $data->id);
        $data_update->update($validatedData);
        // new DataCRUD($storagedelete);
        new DataCRUD($data_update);
        return response()->json(['message' => 'berhasil update']);
    }
    public function destroy(Data $data, $id){
        $data_destroy = Data::findOrFail($id);
        $data_destroy->delete();
        // $truncate = DB::table('hasilwp')->truncate();
        // $storagedelete = Storage::delete($data->image);
        new DataCRUD($data_destroy);
        // new DataCRUD($storagedelete);
        // new DataCRUD($truncate);
        return response()->json(['message' => 'berhasil delete']);
    }
    public function login(Request $request){
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $admin = User::where('email', $request->email)->first();

        // if (! $admin || ! Hash::check($request->password, $admin->password)) {
        //     throw ValidationException::withMessages([
        //         'email' => ['The provided credentials are incorrect.'],
        //     ]);
        // }
        if (! $validator || ! Hash::check($request->password, $admin->password)) {
            throw new ValidationException($validator->errors());
        }

        return $admin->createToken('token')->plainTextToken;
    }
    public function logout(Request $request){
        $logout = $request->user()->currentAccessToken()->delete();
    }
}