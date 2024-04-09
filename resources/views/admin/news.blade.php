@extends('admin.content')

@section('content')

<div id="kt_content_container" class="container-xxl">
<div class="row">

<h3>Новости <a href="/admin/news/new" class="btn btn-primary" style="margin-left: 15px">Добавить</a></h3>
<table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <!--begin::Table head--> 
                                    <thead>
                                        <tr>
                                            <td>Название</td> 
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">

                                     @foreach($news as $item) 
                                        <tr>
                                            <td>
                                                {{$item->title}}
                                            </td> 
                                            <td>
                                                <a href="/admin/news/{{$item->id}}" class="btn btn-primary" style="margin-left: 15px">Настройки</a> 
                                            </td>
                                        </tr>
                                     @endforeach

                                    </tbody>
                                    <!--end::Table body-->
                                </table>

                                {{$news->links()}}

              
         </div>
</div>
@endsection