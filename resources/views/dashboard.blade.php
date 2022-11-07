<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello Admin') }} <div class="float-end">{{ __('ตอนนี้มีจำนวนผู้ใช้ระบบ') }} {{count($users)}} {{ __('คน') }}</div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container ">
            <div class="rpw">
                <table class="table">
                    <thead class="table-primary">
                      <tr>
                        <th scope="col" class="text-center">ลำดับที่</th>
                        <th scope="col" >ชื่อ-สกุล</th>
                        <th scope="col" >อีเมล</th>
                        <th scope="col" >ลงทะเบียน</th>
                        <th scope="col" >อัพเดต</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                    @foreach($users as $row)
                      <tr>
                        <th class="text-center">{{$i++}}</th>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->created_at->diffForHumans()}}</td>
                        <td>{{$row->updated_at->diffForHumans()}}</td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>               
            </div>
        </div>
    </div>
</x-app-layout>
