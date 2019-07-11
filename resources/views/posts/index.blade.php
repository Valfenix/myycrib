@extends('layouts.app')


@section('content')

    <div id="section-body">
        <section class="main-content-area">
            <div class="container">
                <div class="row">

                
                    
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

                        {{-- POST INSERTION --}}
                
                            @if(count($posts) > 1)

                            @foreach($posts as $post)

                        <div class="blog-wrap">
                            <article id="post-594" class="blog-article block post-594 post type-post status-publish format-standard has-post-thumbnail hentry category-rentals tag-accomodations tag-booking tag-holidays tag-rentals tag-reservations">
                                <a href="../heres-what-people-are-saying-about-rentals/index.html">
                                    <img width="1140" height="760" src="{{$post->image}}" class="attachment-homey-gallery size-homey-gallery wp-post-image" alt="" srcset="https://demo01.gethomey.io/wp-content/uploads/2018/10/blog-01-5-1140x760.jpg 1140w, https://demo01.gethomey.io/wp-content/uploads/2018/10/blog-01-5-450x300.jpg 450w, https://demo01.gethomey.io/wp-content/uploads/2018/10/blog-01-5-120x80.jpg 120w" sizes="(max-width: 1140px) 100vw, 1140px" />	
                                </a>
                
                                <div class="block-body">
                                    <h2>
                                        <a href="../heres-what-people-are-saying-about-rentals/index.html">
                                            {{$post->title}}
                                        </a>
                                    </h2>
                                    <p>{{$post->body}}</p>
                                </div>
                                <div class="block-footer clearfix">

                                    <ul class="article-meta list-inline pull-left">
                                        <li class="post-author">
                                            <img width="48" height="48" src="../wp-content/uploads/2018/10/HomeyHost23-150x150.jpg" class="img-circle" alt="" srcset="https://demo01.gethomey.io/wp-content/uploads/2018/10/HomeyHost23-150x150.jpg 150w, https://demo01.gethomey.io/wp-content/uploads/2018/10/HomeyHost23-300x300.jpg 300w, https://demo01.gethomey.io/wp-content/uploads/2018/10/HomeyHost23-250x250.jpg 250w, https://demo01.gethomey.io/wp-content/uploads/2018/10/HomeyHost23-360x360.jpg 360w, https://demo01.gethomey.io/wp-content/uploads/2018/10/HomeyHost23.jpg 400w" sizes="(max-width: 48px) 100vw, 48px" />				by <a href="../administrator/bitwallas/index.html">Mike Parker</a>
                                        </li>
                                        <li class="post-date"><i class="fa fa-calendar-o"></i> {{$post->created_at}}</li>
                                        <li class="post-category"><i class="fa fa-bookmark-o"></i> <a href="../category/rentals/index.html" rel="category tag">Rentals</a></li>
                                    </ul>

                                    <a href="../heres-what-people-are-saying-about-rentals/index.html" class="btn btn-primary btn-sm-full-width pull-right">Read More</a>
                                </div>
                            </article>
                            <hr>

                            <!--start pagination-->
                            <div class="mw-nav">
                            </div>
                            <!--end pagination-->
                        </div><!-- grid-listing-page -->

                        @endforeach
                        
                        @else
                            <p>No post found</p>
                        @endif 

                    </div><!-- col-xs-12 col-sm-12 col-md-8 col-lg-8 -->

                   

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4  homey_sticky">
                        <div class="sidebar">
                            
                            <div id="search-3" class="widget widget_search">
                                <div class="widget-top"><h3 class="widget-title">Search</h3></div>
                                    <form role="search" method="get" id="searchform" class="searchform" action="https://demo01.gethomey.io/">
                                        <div>
                                            <input value="" name="s" id="s" type="text" placeholder="Search">
                                            <button type="submit"></button>
                                        </div>
                                    </form>
                                </div>
                                <div id="homey_latest_posts-16" class="widget widget-latest-posts">

                                <div class="widget-top"><h3 class="widget-title">Latest Posts</h3></div>            
                                

                                <div class="widget-body">
                                    <div class="item-list-view">
                                        <div class="media property-item">
                                            <div class="media-left">
                                                <div class="item-media item-media-thumb">

                                                    <a href="../heres-what-people-are-saying-about-rentals/index.html">
                                                        <img width="120" height="80" src="../wp-content/uploads/2018/10/blog-01-5-120x80.jpg" class="img-responsive wp-post-image" alt="" srcset="https://demo01.gethomey.io/wp-content/uploads/2018/10/blog-01-5-120x80.jpg 120w, https://demo01.gethomey.io/wp-content/uploads/2018/10/blog-01-5-450x300.jpg 450w, https://demo01.gethomey.io/wp-content/uploads/2018/10/blog-01-5-1140x760.jpg 1140w" sizes="(max-width: 120px) 100vw, 120px" />			                        </a>
                                                </div>
                                            </div>
                                            <div class="media-body item-body clearfix">
                                                <div class="item-title-head">
                                                    <div class="title-head-left">
                                                        <h2 class="title"><a href="../heres-what-people-are-saying-about-rentals/index.html">Here&#8217;s What People Are Saying About Rentals</a></h2>
                                                        <i class="fa fa-calendar-o"></i> 8 months ago			                            <span class="post-author">
                                                            by 
                                                            <a href="../administrator/bitwallas/index.html">Mike Parker</a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur... <a href="../heres-what-people-are-saying-about-rentals/index.html">Read more</a></p>
                                            </div>
                                        </div>
                                    </div><!-- .item-wrap -->
                                </div>
                            </div>
                            
                            <div id="homey_latest_comments-10" class="widget widget-latest-comments">
                                <div class="widget-top"><h3 class="widget-title">Latest Comments</h3></div>

                                <div class="widget-body">
                                    <div class="comment-block">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#" class="media-object">
                                                    <img width="60" height="60" src="../wp-content/uploads/2018/10/HomeyHost23-150x150.jpg" class="avatar avatar-60 photo" alt="" srcset="https://demo01.gethomey.io/wp-content/uploads/2018/10/HomeyHost23-150x150.jpg 150w, https://demo01.gethomey.io/wp-content/uploads/2018/10/HomeyHost23-300x300.jpg 300w, https://demo01.gethomey.io/wp-content/uploads/2018/10/HomeyHost23-250x250.jpg 250w, https://demo01.gethomey.io/wp-content/uploads/2018/10/HomeyHost23-360x360.jpg 360w, https://demo01.gethomey.io/wp-content/uploads/2018/10/HomeyHost23.jpg 400w" sizes="(max-width: 60px) 100vw, 60px" />                                </a>
                                            </div>
                                            <div class="media-body media-middle">
                                                <div class="msg-user-info">
                                                    <div class="msg-user-left">
                                                        <h2 class="title"><span>Mike Parker on</span> 
                                                            <a href="../heres-what-people-are-saying-about-rentals/index.html#comment-13">
                                                                Here&#8217;s What People Are Saying About Rentals        
                                                            </a>
                                                        </h2>
                                                        <div class="message-date">
                                                            <i class="fa fa-calendar-o"></i> 
                                                                Oct 22, 2018                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <p> Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales&hellip;</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="homey_image_banner_300_250-15" class="widget widget_homey_image_banner_300_250">            
                                <div class="widget-image-banner-300x250">
                                    <div class="widget-body">
                                        <div class="module-body">
                                            <div class="image-banner">
                                                <a href="http://gethomey.io/" rel="nofollow" target="_blank">
                                                    <img src="../../wordpress-89239-630690.cloudwaysapps.com/wp-content/uploads/2019/01/banner.png" width="300" height="250" alt="Ad" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .row -->
            </div>   <!-- .container -->

        </div> <!-- End #section-body -->
        



























    {{-- <h1>Posts</h1>
    @if(count($posts) > 1)
        @foreach($posts as $post)
            <div class="well">
                 <h3>{{$post->title}}</h3>
                 <p>{{$post->body}}</p>
            </div>
        @endforeach
    @else
        <p>No post found</p>
    @endif --}}
@endsection