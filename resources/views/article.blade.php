@extends('layouts.app')
@section('content')
        <div class=" container   justify-content-center align-items-center border border-black w-50 bg-light">
            <div class="card col-5 m-3  justify-content-center align-items-center" style="width: 18rem;">
                <div class="card-body  justify-content-center align-items-center">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->content}}</p>
                </div>
            </div>
            <div>
                <form action="{{route('articles.index')}}" method="get">
                    @csrf
                    <button type="submit" class="btn btn-primary  justify-content-center align-items-center">Back</button>
                </form>
            </div>
        </div>
        
    

            <div class=" container   justify-content-center align-items-center border border-black w-50 bg-dark" style="--bs-bg-opacity: .1;">
                <form action="{{ route('articles.comments.store', ['article' => $article->id]) }}" method="post" class="container d-flex flex-row justify-content-center align-items-center">
                    @csrf


                    <div class="m-2 w-75">
                        <input type="text" class="form-control " name="comment">
                    </div>
                    <button type="submit" class="btn btn-primary d-flex justify-content-center align-items-center">
                        <i class="fas fa-plus"></i>
                    </button>
                </form>
                <div>
                    @forelse ($article->comments as $comment)
                        <div class=" align-items-center">
                            <div class="d-flex shadow m-3 p-3 bg-white rounded  ">
                                <span class="p-2 mx-2 ">{{ $comment->content }}</span>

                                </iv>
                            </div>

                        @empty
                            <div class="d-flex shadow m-3 p-3 bg-white rounded  ">
                                <span class="p-2 mx-2 ">No comments yet</span>
                            </div>

                    @endforelse
                </div>
            </div>
        </div>
    @endsection