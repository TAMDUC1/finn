<?php
/**
 * Created by PhpStorm.
 * User: TamPham
 * Date: 07/12/2017
 * Time: 12:47
 */
$blogNewCount = $_POST['blogNewCount'];
@foreach($blog->slice(0,$blogNewCount) as $b)
                <div class="block">
                    <p>Title:{{$b['title']}}</p>
                    <p>Content:{{$b['content']}}</p>
                    <p>From user:{{$b['user_id']}}</p>
                </div>
@endforeach