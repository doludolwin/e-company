@extends("layouts.wrapper")

@section("content")
<div id="panel">
    <div class="container">
        <div class="row" style="margin-top: 40px;">
        @foreach($post as $post)
            <card>
                <template slot="admin-name">
<<<<<<< HEAD
                    
                 {{ $post->name }}
            </template>
            <template slot="post-date">
                {{ $post->published_at }}
            </template>
            <template slot="post-header">
                {{ $post->title }}
            </template>
            <template slot="post-body">
                {{ $post->body }}
               
=======

>>>>>>> post-and-card
                </template>
            </card>
        @endforeach

        </div>
    </div>
</div>
@stop
