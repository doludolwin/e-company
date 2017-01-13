@extends("layouts.wrapper")

@section("content")
<div id="panel">
    <div class="container">
        <div class="row" style="margin-top: 40px;">
            <card dplink="images/images/face.jpg" image="images/images/sample.png">
                <template slot="admin-name">
                    
                </template>
                <template slot="post-date">
                   
                </template>
                <template slot="post-header">
                   
                </template>
                <template slot="post-body">
                   
        @foreach($post as $post)
            <card>
                <template slot="admin-name">
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
>>>>>>> 1b5137f95acc700fe27d7405e507f9e3b94c6caf
                </template>
            </card>
        @endforeach

        </div>
    </div>
</div>
@stop
