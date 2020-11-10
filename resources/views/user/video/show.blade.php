@extends('user.layouts.mainLayout')
@section('content')
    <div class="video-block-right-list section-padding">
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="single-video">
                    <video class="video w-100" controls>
                        <source src="video.mp4" type="video/mp4" >
                    </video>
                    {{-- <div class="video-cover">
                        <i class="fas fa-play-circle"></i>
                    </div> --}}
                    {{-- <div class="video_controllers">
                        <div class="left-controls">
                            <div class="play-pause">
                                <div class="play">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-play" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.804 8L5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
                                    </svg>
                                </div>
                                <div class="pause">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pause-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="Previous">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-skip-backward"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M.5 3.5A.5.5 0 0 1 1 4v3.248l6.267-3.636c.52-.302 1.233.043 1.233.696v2.94l6.267-3.636c.52-.302 1.233.043 1.233.696v7.384c0 .653-.713.998-1.233.696L8.5 8.752v2.94c0 .653-.713.998-1.233.696L1 8.752V12a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm7 1.133L1.696 8 7.5 11.367V4.633zm7.5 0L9.196 8 15 11.367V4.633z" />
                                </svg>
                            </div>
                            <div class="next">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-skip-forward"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M15.5 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V8.752l-6.267 3.636c-.52.302-1.233-.043-1.233-.696v-2.94l-6.267 3.636C.713 12.69 0 12.345 0 11.692V4.308c0-.653.713-.998 1.233-.696L7.5 7.248v-2.94c0-.653.713-.998 1.233-.696L15 7.248V4a.5.5 0 0 1 .5-.5zM1 4.633v6.734L6.804 8 1 4.633zm7.5 0v6.734L14.304 8 8.5 4.633z" />
                                </svg>
                            </div>
                        </div>
                        <div class="right-controls">
                            <div class="sound">
                                <div class="numute">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-volume-up"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zM6 5.04L4.312 6.39A.5.5 0 0 1 4 6.5H2v3h2a.5.5 0 0 1 .312.11L6 10.96V5.04z" />
                                        <path
                                            d="M11.536 14.01A8.473 8.473 0 0 0 14.026 8a8.473 8.473 0 0 0-2.49-6.01l-.708.707A7.476 7.476 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303l.708.707z" />
                                        <path
                                            d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.483 5.483 0 0 1 11.025 8a5.483 5.483 0 0 1-1.61 3.89l.706.706z" />
                                        <path
                                            d="M8.707 11.182A4.486 4.486 0 0 0 10.025 8a4.486 4.486 0 0 0-1.318-3.182L8 5.525A3.489 3.489 0 0 1 9.025 8 3.49 3.49 0 0 1 8 10.475l.707.707z" />
                                    </svg>
                                </div>
                                <div class="mute">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-volume-mute"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zM6 5.04L4.312 6.39A.5.5 0 0 1 4 6.5H2v3h2a.5.5 0 0 1 .312.11L6 10.96V5.04zm7.854.606a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708l4-4a.5.5 0 0 1 .708 0z" />
                                        <path fill-rule="evenodd"
                                            d="M9.146 5.646a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="full">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-fullscreen-exit"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.5 0a.5.5 0 0 1 .5.5v4A1.5 1.5 0 0 1 4.5 6h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5zm5 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 10 4.5v-4a.5.5 0 0 1 .5-.5zM0 10.5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 6 11.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zm10 1a1.5 1.5 0 0 1 1.5-1.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4z" />
                                </svg>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-slider-right-list">
                    <div class="video-card video-card-list">
                        <div class="video-card-image">
                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                            <a href="#"><img class="img-fluid" src="img/v1.png" alt=""></a>
                            <div class="time">3:50</div>
                        </div>
                        <div class="video-card-body">
                            <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                        Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                        Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp;
                                        Close</a>
                                </div>
                            </div>
                            <div class="video-title">
                                <a href="#">Here are many variati of passages of Lorem</a>
                            </div>
                            <div class="video-page text-success">
                                Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                    data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                            </div>
                            <div class="video-view">
                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                            </div>
                        </div>
                    </div>
                    <div class="video-card video-card-list active">
                        <div class="video-card-image">
                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                            <a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
                            <div class="time">3:50</div>
                        </div>
                        <div class="video-card-body">
                            <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                        Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                        Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp;
                                        Close</a>
                                </div>
                            </div>
                            <div class="video-title">
                                <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                            </div>
                            <div class="video-page text-success">
                                Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                    data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                            </div>
                            <div class="video-view">
                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                            </div>
                        </div>
                    </div>
                    <div class="video-card video-card-list">
                        <div class="video-card-image">
                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                            <a href="#"><img class="img-fluid" src="img/v3.png" alt=""></a>
                            <div class="time">3:50</div>
                        </div>
                        <div class="video-card-body">
                            <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                        Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                        Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp;
                                        Close</a>
                                </div>
                            </div>
                            <div class="video-title">
                                <a href="#">Culpa qui officia deserunt mollit anim</a>
                            </div>
                            <div class="video-page text-success">
                                Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                    data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                            </div>
                            <div class="video-view">
                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                            </div>
                        </div>
                    </div>
                    <div class="video-card video-card-list">
                        <div class="video-card-image">
                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                            <a href="#"><img class="img-fluid" src="img/v4.png" alt=""></a>
                            <div class="time">3:50</div>
                        </div>
                        <div class="video-card-body">
                            <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                        Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                        Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp;
                                        Close</a>
                                </div>
                            </div>
                            <div class="video-title">
                                <a href="#">Deserunt mollit anim id est laborum.</a>
                            </div>
                            <div class="video-page text-success">
                                Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                    data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                            </div>
                            <div class="video-view">
                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                            </div>
                        </div>
                    </div>
                    <div class="video-card video-card-list">
                        <div class="video-card-image">
                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                            <a href="#"><img class="img-fluid" src="img/v5.png" alt=""></a>
                            <div class="time">3:50</div>
                        </div>
                        <div class="video-card-body">
                            <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                        Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                        Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp;
                                        Close</a>
                                </div>
                            </div>
                            <div class="video-title">
                                <a href="#">Exercitation ullamco laboris nisi ut.</a>
                            </div>
                            <div class="video-page text-success">
                                Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                    data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                            </div>
                            <div class="video-view">
                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                            </div>
                        </div>
                    </div>
                    <div class="video-card video-card-list">
                        <div class="video-card-image">
                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                            <a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
                            <div class="time">3:50</div>
                        </div>
                        <div class="video-card-body">
                            <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                        Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                        Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp;
                                        Close</a>
                                </div>
                            </div>
                            <div class="video-title">
                                <a href="#">There are many variations of passages of Lorem</a>
                            </div>
                            <div class="video-page text-success">
                                Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                    data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                            </div>
                            <div class="video-view">
                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="video-block section-padding">
        <div class="row">
            <div class="col-md-8">
                <div class="single-video-left">
                    <div class="single-video-title box mb-3">
                        <h2><a href="#">Contrary to popular belief, Lorem Ipsum (2019) is not.</a></h2>
                        <p class="mb-0"><i class="fas fa-eye"></i> 2,729,347 views</p>
                    </div>
                    <div class="single-video-author box mb-3">
                        <div class="float-right"><button class="btn btn-danger" type="button">Subscribe
                                <strong>1.4M</strong></button> <button class="btn btn btn-outline-danger" type="button"><i
                                    class="fas fa-bell"></i></button></div>
                        <img class="img-fluid" src="img/s4.png" alt="">
                        <p><a href="#"><strong>Osahan Channel</strong></a> <span title="" data-placement="top"
                                data-toggle="tooltip" data-original-title="Verified"><i
                                    class="fas fa-check-circle text-success"></i></span></p>
                        <small>Published on Aug 10, 2018</small>
                    </div>
                    <div class="single-video-info-content box mb-3">
                        <h6>Cast:</h6>
                        <p>Nathan Drake , Victor Sullivan , Sam Drake , Elena Fisher</p>
                        <h6>Category :</h6>
                        <p>Gaming , PS4 Exclusive , Gameplay , 1080p</p>
                        <h6>About :</h6>
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as evolved over the years, sometimes </p>
                        <h6>Tags :</h6>
                        <p class="tags mb-0">
                            <span><a href="#">Uncharted 4</a></span>
                            <span><a href="#">Playstation 4</a></span>
                            <span><a href="#">Gameplay</a></span>
                            <span><a href="#">1080P</a></span>
                            <span><a href="#">ps4Share</a></span>
                            <span><a href="#">+ 6</a></span>
                        </p>
                    </div>
                    <div class="box mb-3 single-video-comment-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="retro-comments-tab" data-toggle="tab" href="#retro-comments"
                                    role="tab" aria-controls="retro" aria-selected="false">vidoe
                                    Comments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="disqus-comments-tab" data-toggle="tab" href="#disqus-comments"
                                    role="tab" aria-controls="disqus" aria-selected="true">Disqus Comments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="facebook-comments-tab" data-toggle="tab" href="#facebook-comments"
                                    role="tab" aria-controls="facebook" aria-selected="false">Facebook Comments</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="disqus-comments" role="tabpanel"
                                aria-labelledby="disqus-comments-tab">
                                <h1>Soon...</h1>
                            </div>
                            <div class="tab-pane fade" id="facebook-comments" role="tabpanel"
                                aria-labelledby="facebook-comments-tab">
                                <h1>Soon...</h1>
                            </div>
                            <div class="tab-pane fade show active" id="retro-comments" role="tabpanel"
                                aria-labelledby="retro-comments-tab">
                                <div class="reviews-members pt-0">
                                    <div class="media">
                                        <a href="#"><img class="mr-3" src="img/s1.png" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <div class="form-members-body">
                                                <textarea rows="1" placeholder="Add a public comment..."
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-members-footer text-right mt-2">
                                                <b class="float-left">12,725 Comments
                                                </b>
                                                <button class="btn btn-outline-danger btn-sm" type="button">CANCEL</button>
                                                <button class="btn btn-danger btn-sm" type="button">COMMENT</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews-members">
                                    <div class="media">
                                        <a href="#"><img class="mr-3" src="img/s2.png" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <div class="reviews-members-header">
                                                <h6 class="mb-1"><a class="text-black" href="#">Gurdeep Osahan </a> <small
                                                        class="text-gray">2 months ago</small></h6>
                                            </div>
                                            <div class="reviews-members-body">
                                                <p> reacthe last order. Even though they had Chefs in their open kitchen
                                                    they weren’t flexible to dish out few more items. Anyway the food was
                                                    super specially their stone dessert.</p>
                                            </div>
                                            <div class="reviews-members-footer">
                                                <a class="total-like" href="#"><i class="fas fa-thumbs-up"></i> 123</a> <a
                                                    class="total-like" href="#"><i class="fas fa-thumbs-down"></i> 02</a>
                                                <span dir="rtl" class="total-like-user-main ml-2">
                                                    <a href="#" title="Gurdeep Osahan" data-placement="top"
                                                        data-toggle="tooltip"><img class="total-like-user" src="img/s1.png"
                                                            alt="Generic placeholder image"></a>
                                                    <a href="#" title="Gurdeep Osahan" data-placement="top"
                                                        data-toggle="tooltip"><img class="total-like-user" src="img/s2.png"
                                                            alt="Generic placeholder image"></a>
                                                    <a href="#" title="Gurdeep Osahan" data-placement="top"
                                                        data-toggle="tooltip"><img class="total-like-user" src="img/s3.png"
                                                            alt="Generic placeholder image"></a>
                                                    <a href="#" title="Gurdeep Osahan" data-placement="top"
                                                        data-toggle="tooltip"><img class="total-like-user" src="img/s4.png"
                                                            alt="Generic placeholder image"></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews-members">
                                    <div class="media">
                                        <a href="#"><img alt="Generic placeholder image" src="img/s3.png" class="mr-3"></a>
                                        <div class="media-body">
                                            <div class="reviews-members-header">
                                                <h6 class="mb-1"><a href="#" class="text-black">Gurdeep Osahan </a> <small
                                                        class="text-gray">2 months ago</small></h6>
                                            </div>
                                            <div class="reviews-members-body">
                                                <p>Was here impromptu in their first week, reacthe last order. Even though
                                                    they had Chefs in their open kitchen they weren’t flexible to dish out
                                                    few more items.</p>
                                            </div>
                                            <div class="reviews-members-footer">
                                                <a href="#" class="total-like"><i class="fas fa-thumbs-up"></i> 123</a> <a
                                                    href="#" class="total-like"><i class="fas fa-thumbs-down"></i> 02</a>
                                                <span class="total-like-user-main ml-2" dir="rtl">
                                                    <a data-toggle="tooltip" data-placement="top" title="Gurdeep Osahan"
                                                        href="#"><img alt="Generic placeholder image" src="img/s5.png"
                                                            class="total-like-user"></a>
                                                    <a data-toggle="tooltip" data-placement="top" title="Gurdeep Osahan"
                                                        href="#"><img alt="Generic placeholder image" src="img/s6.png"
                                                            class="total-like-user"></a>
                                                    <a data-toggle="tooltip" data-placement="top" title="Gurdeep Osahan"
                                                        href="#"><img alt="Generic placeholder image" src="img/s7.png"
                                                            class="total-like-user"></a>
                                                    <a data-toggle="tooltip" data-placement="top" title="Gurdeep Osahan"
                                                        href="#"><img alt="Generic placeholder image" src="img/s8.png"
                                                            class="total-like-user"></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-video-right">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="adblock">
                                <div class="img">
                                    Google AdSense<br>
                                    336 x 280
                                </div>
                            </div>
                            <div class="main-title">
                                <div class="btn-group float-right right-action">
                                    <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                            Rated</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                            Viewed</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                            &nbsp; Close</a>
                                    </div>
                                </div>
                                <h6>Up Next</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v1.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">Here are many variati of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v3.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">Culpa qui officia deserunt mollit anim</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v4.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">Deserunt mollit anim id est laborum.</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v5.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">Exercitation ullamco laboris nisi ut.</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="adblock mt-0">
                                <div class="img">
                                    Google AdSense<br>
                                    336 x 280
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v1.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">Here are many variati of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
