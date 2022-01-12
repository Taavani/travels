<section class="section novi-bg novi-bg-img breadcrumbs-custom">
    <div class="container">
        <div class="breadcrumbs-custom__inner">
            <p class="breadcrumbs-custom__title">{{ $title }}</p>
            @if(0 < count($breadcrumbs))
            <ul class="breadcrumbs-custom__path">
                @foreach($breadcrumbs as $breadcrumb)
                    @if($loop->last)
                        <li class="active">{{ $breadcrumb['name'] }}</li>
                    @else
                        <li><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a></li>
                    @endif
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</section>

<section class="section novi-bg novi-bg-img bg-default section-lg">
    <div class="container">
        <div class="row row-fix row-60 justify-content-sm-center">
            <div class="col-lg-8 section-divided__main group-post">
                <div class="section-md post-single-body">
                    <h3>{{ $title }}</h3>
                    <div class="post-meta d-none">
                        <div class="group">
                            <a href="standard-post.html">
                                <time datetime="{{ $date }}">{{ $date }}</time>
                            </a>
                            <a class="meta-author" href="">by {{ $author }}</a>
                        </div>
                    </div>

                    @php(the_content())

                </div>

                {{--
                <div class="section-md">
                    <div class="row row-60 justify-content-md-between">
                        <div class="col-md-5 text-md-left"><a class="unit flex-row unit-spacing-md align-items-center" href="standard-post.html">
                                <div class="unit-left"><span class="icon novi-icon icon-md linear-icon-arrow-left"></span></div>
                                <div class="unit-body">
                                    <p class="small">5 Things to Know Before You Buy an HTML Template</p>
                                </div></a></div>
                        <div class="col-md-5 text-md-right"><a class="unit flex-row unit-spacing-md align-items-center" href="standard-post.html">
                                <div class="unit-body">
                                    <p class="small">5 Things to Know Before You Buy an HTML Template</p>
                                </div>
                                <div class="unit-right"><span class="icon novi-icon icon-md linear-icon-arrow-right"></span></div></a></div>
                    </div>
                </div>

                <div class="section-md">
                    <h5>Latest Posts</h5>
                    <div class="row row-60">
                        <div class="col-sm-6">
                            <!-- Post classic-->
                            <article class="post-classic post-minimal"><img src="images/post-minimal-1-418x315.jpg" alt="" width="418" height="315"/>
                                <div class="post-classic-title">
                                    <h5><a href="image-post.html">10 Reasons to Buy Monstroid<sup>2</sup>.</a></h5>
                                </div>
                                <div class="post-meta">
                                    <div class="group"><a href="image-post.html">
                                            <time datetime="2020">Jan.20, 2020</time></a><a class="meta-author" href="image-post.html">by Brian Williamson</a></div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6">
                            <!-- Post classic-->
                            <article class="post-classic post-minimal"><img src="images/post-classic-1-886x668.jpg" alt="" width="886" height="668"/>
                                <div class="post-classic-title">
                                    <h5><a href="image-post.html">Getting to another  level of design and functionality.</a></h5>
                                </div>
                                <div class="post-meta">
                                    <div class="group"><a href="image-post.html">
                                            <time datetime="2020">Jan.20, 2020</time></a><a class="meta-author" href="image-post.html">by Brian Williamson</a></div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="section-md">
                    <!-- Blurb minimal-->
                    <article class="blurb">
                        <div class="unit flex-sm-row unit-spacing-md">
                            <div class="unit-left"><img class="rounded-circle" src="images/timeline-1-109x109.jpg" alt="" width="109" height="109"/>
                            </div>
                            <div class="unit-body">
                                <p class="blurb__title">About the author</p>
                                <p class="small">Mr.Williamson was born in one of Detroit’s poorest blocks, all before pursuing his successful managerial career in the future. For him, the breakthrough happened when he was able to get on Harvard University’s Law School list. After graduating from there, he was working for a few years for a number of multi-million dollar corporations, climbing up the corporate ladder and...</p>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="section-md">
                    <h5>3 Comments</h5>
                    <div class="box-comment">
                        <div class="unit flex-sm-row unit-spacing-md">
                            <div class="unit-left">
                                <div class="box-comment__icon"><span class="icon novi-icon linear-icon-man"></span></div>
                            </div>
                            <div class="unit-body">
                                <div class="box-comment__body">
                                    <h6>Adam Smith</h6>
                                    <time datetime="2020">Jul 18, 2020</time>
                                    <p>With all its functionality and stylish design, the price for this one is a bargain!</p><a href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-comment box-comment-reply">
                        <div class="unit flex-sm-row unit-spacing-md">
                            <div class="unit-left"><img class="rounded-circle" src="images/box-comment-1-70x70.jpg" alt="" width="70" height="70"/>
                            </div>
                            <div class="unit-body" style="width: 100%">
                                <div class="box-comment__body">
                                    <h6>Brian Williamson</h6>
                                    <time datetime="2020">Jul 18, 2020</time>
                                    <p>Awesome theme, that is universal for absolutely any kind of business!</p><a href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-comment">
                        <div class="unit flex-sm-row unit-spacing-md">
                            <div class="unit-left">
                                <div class="box-comment__icon"><span class="icon novi-icon linear-icon-man"></span></div>
                            </div>
                            <div class="unit-body">
                                <div class="box-comment__body">
                                    <h6>Tom</h6>
                                    <time datetime="2020">Jul 18, 2020</time>
                                    <p>This HTML Template is the best one I’ve seen this year!</p><a href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-md">
                    <h5>Leave a reply</h5>
                    <!-- RD Mailform-->
                    <form class="rd-mailform rd-mailform_style-1 text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap form-wrap_icon"><span class="novi-icon form-icon linear-icon-man"></span>
                            <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                            <label class="form-label" for="contact-name">Your name</label>
                        </div>
                        <div class="form-wrap form-wrap_icon"><span class="novi-icon form-icon linear-icon-envelope"></span>
                            <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                            <label class="form-label" for="contact-email">Your e-mail</label>
                        </div>
                        <div class="form-wrap form-wrap_icon"><span class="novi-icon form-icon linear-icon-telephone"></span>
                            <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
                            <label class="form-label" for="contact-phone">Your phone</label>
                        </div>
                        <div class="form-wrap form-wrap_icon"><span class="novi-icon form-icon linear-icon-feather"></span>
                            <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                            <label class="form-label" for="contact-message">Your message</label>
                        </div>
                        <button class="button button-primary" type="submit">SUBMIT COMMENT</button>
                    </form>
                </div>
                --}}
            </div>
            <div class="col-lg-4 section-divided__aside section-divided__aside-left group-post">
                {{--
                <!-- Categories-->
                <div class="section-md">
                    <h5>Categories</h5>
                    <ul class="list-linked">
                        <li><a href="#">Retina Homepage</a></li>
                        <li><a href="#">New Page Examples</a></li>
                        <li><a href="#">Parallax Sections</a></li>
                        <li><a href="#">Shortcode Central</a></li>
                        <li><a href="#">Ultimate Font Collection</a></li>
                    </ul>
                </div>

                <!-- Posts-->
                <div class="section-md">
                    <h5>Latest Posts</h5>
                    <ul class="list-sm">
                        <li>
                            <!-- Post inline-->
                            <article class="post-inline">
                                <div class="post-inline__header"><span class="post-inline__time">Jan.20, 2020</span><a class="post-inline__author meta-author" href="standard-post.html">by Brian Williamson</a></div>
                                <p class="post-inline__link"><a href="standard-post.html">How to Use Bootstrap Framework</a></p>
                            </article>
                        </li>
                        <li>
                            <!-- Post inline-->
                            <article class="post-inline">
                                <div class="post-inline__header"><span class="post-inline__time">Jan.20, 2020</span><a class="post-inline__author meta-author" href="standard-post.html">by Brian Williamson</a></div>
                                <p class="post-inline__link"><a href="standard-post.html">Getting to another level of design and functionality.</a></p>
                            </article>
                        </li>
                        <li>
                            <!-- Post inline-->
                            <article class="post-inline">
                                <div class="post-inline__header"><span class="post-inline__time">Jan.20, 2020</span><a class="post-inline__author meta-author" href="standard-post.html">by Brian Williamson</a></div>
                                <p class="post-inline__link"><a href="standard-post.html">Creating Portfolio.</a></p>
                            </article>
                        </li>
                    </ul>
                </div>

                <!-- Tags-->
                <div class="section-md">
                    <h5>Tags</h5>
                    <ul class="list-tags">
                        <li><a href="#">Retina Homepage</a></li>
                        <li><a href="#">New Page Examples</a></li>
                        <li><a href="#">Ultimate Font Collection</a></li>
                        <li><a href="#">Parallax Sections</a></li>
                        <li><a href="#">Shortcode Central</a></li>
                    </ul>
                </div>

                <!-- Flickr-->
                <div class="section-md">
                    <h5>Flickr</h5>
                    <div class="flickr grid-4" data-flickr-tags="html-m2" data-lightgallery="group">
                        <div class="flickr-item" data-type="flickr-item"><a class="thumb-minimal" data-image_b="href" data-lightgallery="item">
                                <figure><img src="images/_blank.png" data-image_s="src" data-title="alt" width="75" height="75" alt=""></figure>
                                <div class="thumb-minimal__overlay"></div></a></div>
                        <div class="flickr-item" data-type="flickr-item"><a class="thumb-minimal" data-image_b="href" data-lightgallery="item">
                                <figure><img src="images/_blank.png" data-image_s="src" data-title="alt" width="75" height="75" alt=""></figure>
                                <div class="thumb-minimal__overlay"></div></a></div>
                        <div class="flickr-item" data-type="flickr-item"><a class="thumb-minimal" data-image_b="href" data-lightgallery="item">
                                <figure><img src="images/_blank.png" data-image_s="src" data-title="alt" width="75" height="75" alt=""></figure>
                                <div class="thumb-minimal__overlay"></div></a></div>
                        <div class="flickr-item" data-type="flickr-item"><a class="thumb-minimal" data-image_b="href" data-lightgallery="item">
                                <figure><img src="images/_blank.png" data-image_s="src" data-title="alt" width="75" height="75" alt=""></figure>
                                <div class="thumb-minimal__overlay"></div></a></div>
                        <div class="flickr-item" data-type="flickr-item"><a class="thumb-minimal" data-image_b="href" data-lightgallery="item">
                                <figure><img src="images/_blank.png" data-image_s="src" data-title="alt" width="75" height="75" alt=""></figure>
                                <div class="thumb-minimal__overlay"></div></a></div>
                        <div class="flickr-item" data-type="flickr-item"><a class="thumb-minimal" data-image_b="href" data-lightgallery="item">
                                <figure><img src="images/_blank.png" data-image_s="src" data-title="alt" width="75" height="75" alt=""></figure>
                                <div class="thumb-minimal__overlay"></div></a></div>
                        <div class="flickr-item" data-type="flickr-item"><a class="thumb-minimal" data-image_b="href" data-lightgallery="item">
                                <figure><img src="images/_blank.png" data-image_s="src" data-title="alt" width="75" height="75" alt=""></figure>
                                <div class="thumb-minimal__overlay"></div></a></div>
                        <div class="flickr-item" data-type="flickr-item"><a class="thumb-minimal" data-image_b="href" data-lightgallery="item">
                                <figure><img src="images/_blank.png" data-image_s="src" data-title="alt" width="75" height="75" alt=""></figure>
                                <div class="thumb-minimal__overlay"></div></a></div>
                    </div>
                </div>
                --}}
            </div>
        </div>
    </div>
</section>
