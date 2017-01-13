@extends("layouts.wrapper")

@section("content")
<div id="panel">
    <div class="container">
        <div class="row" style="margin-top: 40px;">
        @foreach($post as $post)
            <card>
                <template slot="admin-name">
                    
                </template>
                <template slot="post-date">
                    
                </template>
                <template slot="post-header">
                    
                </template>
               <template slot="post-body">
                    
                </template>
            </card>
        @endforeach

        </div>
    </div>
</div>
@stop
