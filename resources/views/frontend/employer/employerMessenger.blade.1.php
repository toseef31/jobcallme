@extends('frontend.layouts.app')

@section('title','Post New Job')

@section('content')

<!--Jobs section start-->
<section id="chat">
    <div class="container">
        <!-- Chat Room
             ================================================= -->
        <div class="chat-room">
            <div  class="row">
                <div class="col-md-4">
                    <div class="col-md-12 contact-search">
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control"  placeholder="Search for people..." >
                        </div>
                    </div>
                    <hr>
                    <!-- Contact List in Left-->
                    <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">
                        <li class="active">
                            <a href="#contact-1" data-toggle="tab">
                                <div class="contact">
                                    <img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left"/>
                                    <div class="msg-preview">
                                        <h6>Linda Lohan</h6>
                                        <p class="text-muted">Hi there, how are you</p>
                                        <small class="text-muted">a min ago</small>
                                        <div class="chat-alert">1</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#contact-2" data-toggle="tab">
                                <div class="contact">
                                    <img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left"/>
                                    <div class="msg-preview">
                                        <h6>Julia Cox</h6>
                                        <p class="text-muted">see you soon</p>
                                        <small class="text-muted">an hour ago</small>
                                        <div class="seen"><i class="icon ion-checkmark-round"></i></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#contact-3" data-toggle="tab">
                                <div class="contact">
                                    <img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left"/>
                                    <div class="msg-preview">
                                        <h6>Sophia Lee</h6>
                                        <p class="text-muted">Okay fine. thank you</p>
                                        <small class="text-muted">13 hour ago</small>
                                        <div class="replied"><i class="icon ion-reply"></i></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#contact-4" data-toggle="tab">
                                <div class="contact">
                                    <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left"/>
                                    <div class="msg-preview">
                                        <h6>John Doe</h6>
                                        <p class="text-muted">hey anybody there</p>
                                        <small class="text-muted">Yesterday</small>
                                        <div class="chat-alert">1</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#contact-5" data-toggle="tab">
                                <div class="contact">
                                    <img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left"/>
                                    <div class="msg-preview">
                                        <h6>Anna Young</h6>
                                        <p class="text-muted">I gotta go</p>
                                        <small class="text-muted">2 days ago</small>
                                        <div class="seen"><i class="icon ion-checkmark-round"></i></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#contact-6" data-toggle="tab">
                                <div class="contact">
                                    <img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left"/>
                                    <div class="msg-preview">
                                        <h6>Richard Bell</h6>
                                        <p class="text-muted">Hey there?</p>
                                        <small class="text-muted">2 days ago</small>
                                        <div class="chat-alert">1</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul><!--Contact List in Left End-->

                </div>
                <div class="col-md-8">

                    <!--Chat Messages in Right-->
                    <div class="tab-content scrollbar-wrapper wrapper scrollbar-outer">
                        <div class="tab-pane active" id="contact-1">
                            <div class="messenger-toolbar">
                                <div class="mt-name">
                                    <p><i class="fa fa-users"></i>  Linda Lohan</p>
                                </div>
                                <div class="mt-buttons">
                                    <button type="button"><i class="fa fa-video-camera"></i></button>
                                    <button type="button"><i class="fa fa-phone"></i></button>
                                </div>
                            </div>
                            <div class="chat-body">
                                <ul class="chat-message">
                                    <li class="left">
                                        <img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Linda Lohan</h5>
                                                <small class="text-muted">3 days ago</small>
                                            </div>
                                            <p>Hi honey, how are you doing???? Long time no see. Where have you been?</p>
                                        </div>
                                    </li>
                                    <li class="right">
                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Sarah Cruiz</h5>
                                                <small class="text-muted">3 days ago</small>
                                            </div>
                                            <p>I have been on vacation</p>
                                        </div>
                                    </li>
                                    <li class="right">
                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Sarah Cruiz</h5>
                                                <small class="text-muted">3 days ago</small>
                                            </div>
                                            <p>it was a great time for me. we had a lot of fun <i class="em em-blush"></i></p>
                                        </div>
                                    </li>
                                    <li class="left">
                                        <img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Linda Lohan</h5>
                                                <small class="text-muted">3 days ago</small>
                                            </div>
                                            <p>that's cool I wish I were you <i class="em em-expressionless"></i></p>
                                        </div>
                                    </li>
                                    <li class="right">
                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Sarah Cruiz</h5>
                                                <small class="text-muted">3 days ago</small>
                                            </div>
                                            <p><i class="em em-hand"></i></p>
                                        </div>
                                    </li>
                                    <li class="left">
                                        <img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Linda Lohan</h5>
                                                <small class="text-muted">a min ago</small>
                                            </div>
                                            <p>Hi there, how are you</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="contact-2">
                            <div class="messenger-toolbar">
                                <div class="mt-name">
                                    <p><i class="fa fa-users"></i>  Julia Cox</p>
                                </div>
                                <div class="mt-buttons">
                                    <button type="button"><i class="fa fa-video-camera"></i></button>
                                    <button type="button"><i class="fa fa-phone"></i></button>
                                </div>
                            </div>
                            <div class="chat-body">
                                <ul class="chat-message">
                                    <li class="left">
                                        <img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Julia Cox</h5>
                                                <small class="text-muted">a day ago</small>
                                            </div>
                                            <p>Hi</p>
                                        </div>
                                    </li>
                                    <li class="right">
                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Sarah Cruiz</h5>
                                                <small class="text-muted">a day ago</small>
                                            </div>
                                            <p>hellow</p>
                                        </div>
                                    </li>
                                    <li class="left">
                                        <img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Julia Cox</h5>
                                                <small class="text-muted">an hour ago</small>
                                            </div>
                                            <p>good</p>
                                        </div>
                                    </li>
                                    <li class="right">
                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Sarah Cruiz</h5>
                                                <small class="text-muted">an hour ago</small>
                                            </div>
                                            <p>see you soon</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="contact-3">
                            <div class="messenger-toolbar">
                                <div class="mt-name">
                                    <p><i class="fa fa-users"></i>  Sarah</p>
                                </div>
                                <div class="mt-buttons">
                                    <button type="button"><i class="fa fa-video-camera"></i></button>
                                    <button type="button"><i class="fa fa-phone"></i></button>
                                </div>
                            </div>
                            <div class="chat-body">
                                <ul class="chat-message">
                                    <li class="right">
                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Sarah</h5>
                                                <small class="text-muted">2 days ago</small>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                        </div>
                                    </li>
                                    <li class="left">
                                        <img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Sophia Lee</h5>
                                                <small class="text-muted">a day ago</small>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                                        </div>
                                    </li>
                                    <li class="right">
                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Sarah  Cruiz</h5>
                                                <small class="text-muted">13 hours ago</small>
                                            </div>
                                            <p>Okay fine. thank you</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="contact-4">
                            <div class="messenger-toolbar">
                                <div class="mt-name">
                                    <p><i class="fa fa-users"></i>  John Doe</p>
                                </div>
                                <div class="mt-buttons">
                                    <button type="button"><i class="fa fa-video-camera"></i></button>
                                    <button type="button"><i class="fa fa-phone"></i></button>
                                </div>
                            </div>
                            <div class="chat-body">
                                <ul class="chat-message">
                                    <li class="left">
                                        <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>John Doe</h5>
                                                <small class="text-muted">a day ago</small>
                                            </div>
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                                        </div>
                                    </li>
                                    <li class="left">
                                        <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>John Doe</h5>
                                                <small class="text-muted">a day ago</small>
                                            </div>
                                            <p>hey anybody there</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="contact-5">
                            <div class="messenger-toolbar">
                                <div class="mt-name">
                                    <p><i class="fa fa-users"></i>  Anna Young</p>
                                </div>
                                <div class="mt-buttons">
                                    <button type="button"><i class="fa fa-video-camera"></i></button>
                                    <button type="button"><i class="fa fa-phone"></i></button>
                                </div>
                            </div>
                            <div class="chat-body">
                                <ul class="chat-message">
                                    <li class="left">
                                        <img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Anna Young</h5>
                                                <small class="text-muted">2 days ago</small>
                                            </div>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</p>
                                        </div>
                                    </li>
                                    <li class="left">
                                        <img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Anna Young</h5>
                                                <small class="text-muted">2 days ago</small>
                                            </div>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                        </div>
                                    </li>
                                    <li class="right">
                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Sarah Cruiz</h5>
                                                <small class="text-muted">2 days ago</small>
                                            </div>
                                            <p>I gotta go</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="contact-6">
                            <div class="messenger-toolbar">
                                <div class="mt-name">
                                    <p><i class="fa fa-users"></i>  Richard Bell</p>
                                </div>
                                <div class="mt-buttons">
                                    <button type="button"><i class="fa fa-video-camera"></i></button>
                                    <button type="button"><i class="fa fa-phone"></i></button>
                                </div>
                            </div>
                            <div class="chat-body">
                                <ul class="chat-message">
                                    <li class="left">
                                        <img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Richard Bell</h5>
                                                <small class="text-muted">2 days ago</small>
                                            </div>
                                            <p>Hello</p>
                                        </div>
                                    </li>
                                    <li class="left">
                                        <img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Richard Bell</h5>
                                                <small class="text-muted">2 days ago</small>
                                            </div>
                                            <p>Hi</p>
                                        </div>
                                    </li>
                                    <li class="left">
                                        <img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Richard Bell</h5>
                                                <small class="text-muted">2 days ago</small>
                                            </div>
                                            <p>Hey</p>
                                        </div>
                                    </li>
                                    <li class="left">
                                        <img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                                        <div class="chat-item">
                                            <div class="chat-item-header">
                                                <h5>Richard Bell</h5>
                                                <small class="text-muted">2 days ago</small>
                                            </div>
                                            <p>Hey there</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--Chat Messages in Right End-->

                    <div class="send-message">
                        <textarea class="form-control" placeholder="Type a message..."></textarea>
                        <div class=" pull-right">
                            <div class="fileUpload btn">
                                <i class="fa fa-picture-o"></i>
                                <input type="file" class="upload" name="image" />
                            </div>
                            <div class="fileUpload btn">
                                <i class="fa fa-paperclip"></i>
                                <input type="file" class="upload" name="" />
                            </div>
                            <button type="button" id="send" class="btn btn-default">send </button>
                        </div>
                        <!--<div class="input-group">
                            <input type="text" class="form-control" placeholder="Type your message">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Send</button>
                            </span>
                        </div>-->
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!--Jobs section End-->

@endsection
		@section('page-footer')
		<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
            return this.href == url;
        }).parent().addClass('active');
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#feedback-Form').feedBackBox();
    });
</script>

<!--Scroll to top Button-->
<script>
    jQuery(document).ready(function() {
        var offset = 250;
        var duration = 300;
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.back-to-top').fadeIn(duration);
            } else {
                jQuery('.back-to-top').fadeOut(duration);
            }
        });
        jQuery('.back-to-top').click(function(event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, duration);
            return false;
        })
    });
</script>
		@endsection