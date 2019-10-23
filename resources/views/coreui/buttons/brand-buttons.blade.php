@extends('coreui.base')

@section('content')

<div class="container-fluid">
            <style type="text/css">
              .btn {
                margin-bottom: 4px;
              }
              .btn img{
                fill: #ffffff;
              }
            </style>
            <div class="fade-in">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header"><strong>Brand Buttons</strong></div>
                    <div class="card-body">
                      <h6>Size Small<small>Add this class<code>.btn-sm</code></small></h6>
                      <p>
                        <button class="btn btn-sm btn-facebook" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/facebook-f.svg" alt="facebook"><span>Facebook</span></button>
                        <button class="btn btn-sm btn-twitter" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/twitter.svg" alt="twitter"><span>Twitter</span></button>
                        <button class="btn btn-sm btn-linkedin" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/linkedin.svg" alt="linkedin"><span>LinkedIn</span></button>
                        <button class="btn btn-sm btn-flickr" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/flickr.svg" alt="flickr"><span>Flickr</span></button>
                        <button class="btn btn-sm btn-tumblr" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/tumblr.svg" alt="tumblr"><span>Tumblr</span></button>
                        <button class="btn btn-sm btn-xing" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/xing.svg" alt="xing"><span>Xing</span></button>
                        <button class="btn btn-sm btn-github" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/github.svg" alt="github"><span>Github</span></button>
                        <button class="btn btn-sm btn-stack-overflow" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/stack-overflow.svg" alt="stack-overflow"><span>StackOverflow</span></button>
                        <button class="btn btn-sm btn-youtube" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/youtube.svg" alt="youtube"><span>YouTube</span></button>
                        <button class="btn btn-sm btn-dribbble" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/dribbble.svg" alt="dribbble"><span>Dribbble</span></button>
                        <button class="btn btn-sm btn-instagram" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/instagram.svg" alt="instagram"><span>Instagram</span></button>
                        <button class="btn btn-sm btn-pinterest" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/pinterest.svg" alt="pinterest"><span>Pinterest</span></button>
                        <button class="btn btn-sm btn-vk" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/vk.svg" alt="vk"><span>VK</span></button>
                        <button class="btn btn-sm btn-yahoo" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/yahoo.svg" alt="yahoo"><span>Yahoo</span></button>
                        <button class="btn btn-sm btn-behance" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/behance.svg" alt="behance"><span>Behance</span></button>
                        <button class="btn btn-sm btn-reddit" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/reddit.svg" alt="reddit"><span>Reddit</span></button>
                        <button class="btn btn-sm btn-vimeo" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/vimeo.svg" alt="vimeo"><span>Vimeo</span></button>
                      </p>
                      <h6>Size Normal</h6>
                      <p>
                        <button class="btn btn-facebook" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/facebook-f.svg" alt="facebook"><span>Facebook</span></button>
                        <button class="btn btn-twitter" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/twitter.svg" alt="twitter"><span>Twitter</span></button>
                        <button class="btn btn-linkedin" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/linkedin.svg" alt="linkedin"><span>LinkedIn</span></button>
                        <button class="btn btn-flickr" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/flickr.svg" alt="flickr"><span>Flickr</span></button>
                        <button class="btn btn-tumblr" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/tumblr.svg" alt="tumblr"><span>Tumblr</span></button>
                        <button class="btn btn-xing" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/xing.svg" alt="xing"><span>Xing</span></button>
                        <button class="btn btn-github" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/github.svg" alt="github"><span>Github</span></button>
                        <button class="btn btn-stack-overflow" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/stack-overflow.svg" alt="stack-overflow"><span>StackOverflow</span></button>
                        <button class="btn btn-youtube" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/youtube.svg" alt="youtube"><span>YouTube</span></button>
                        <button class="btn btn-dribbble" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/dribbble.svg" alt="dribbble"><span>Dribbble</span></button>
                        <button class="btn btn-instagram" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/instagram.svg" alt="instagram"><span>Instagram</span></button>
                        <button class="btn btn-pinterest" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/pinterest.svg" alt="pinterest"><span>Pinterest</span></button>
                        <button class="btn btn-vk" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/vk.svg" alt="vk"><span>VK</span></button>
                        <button class="btn btn-yahoo" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/yahoo.svg" alt="yahoo"><span>Yahoo</span></button>
                        <button class="btn btn-behance" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/behance.svg" alt="behance"><span>Behance</span></button>
                        <button class="btn btn-reddit" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/reddit.svg" alt="reddit"><span>Reddit</span></button>
                        <button class="btn btn-vimeo" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/vimeo.svg" alt="vimeo"><span>Vimeo</span></button>
                      </p>
                      <h6>Size Large<small>Add this class<code>.btn-lg</code></small></h6>
                      <p>
                        <button class="btn btn-lg btn-facebook" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/facebook-f.svg" alt="facebook"><span>Facebook</span></button>
                        <button class="btn btn-lg btn-twitter" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/twitter.svg" alt="twitter"><span>Twitter</span></button>
                        <button class="btn btn-lg btn-linkedin" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/linkedin.svg" alt="linkedin"><span>LinkedIn</span></button>
                        <button class="btn btn-lg btn-flickr" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/flickr.svg" alt="flickr"><span>Flickr</span></button>
                        <button class="btn btn-lg btn-tumblr" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/tumblr.svg" alt="tumblr"><span>Tumblr</span></button>
                        <button class="btn btn-lg btn-xing" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/xing.svg" alt="xing"><span>Xing</span></button>
                        <button class="btn btn-lg btn-github" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/github.svg" alt="github"><span>Github</span></button>
                        <button class="btn btn-lg btn-stack-overflow" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/stack-overflow.svg" alt="stack-overflow"><span>StackOverflow</span></button>
                        <button class="btn btn-lg btn-youtube" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/youtube.svg" alt="youtube"><span>YouTube</span></button>
                        <button class="btn btn-lg btn-dribbble" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/dribbble.svg" alt="dribbble"><span>Dribbble</span></button>
                        <button class="btn btn-lg btn-instagram" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/instagram.svg" alt="instagram"><span>Instagram</span></button>
                        <button class="btn btn-lg btn-pinterest" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/pinterest.svg" alt="pinterest"><span>Pinterest</span></button>
                        <button class="btn btn-lg btn-vk" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/vk.svg" alt="vk"><span>VK</span></button>
                        <button class="btn btn-lg btn-yahoo" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/yahoo.svg" alt="yahoo"><span>Yahoo</span></button>
                        <button class="btn btn-lg btn-behance" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/behance.svg" alt="behance"><span>Behance</span></button>
                        <button class="btn btn-lg btn-reddit" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/reddit.svg" alt="reddit"><span>Reddit</span></button>
                        <button class="btn btn-lg btn-vimeo" type="button"><img class="c-icon mr-2" src="/assets/icons/brands/vimeo.svg" alt="vimeo"><span>Vimeo</span></button>
                      </p>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header"><strong>Brand Buttons</strong><small>&nbsp;Only icons</small></div>
                    <div class="card-body">
                      <h6>Size Small<small>Add this class<code>.btn-sm</code></small></h6>
                      <p>
                        <button class="btn btn-sm btn-facebook" type="button"><img class="c-icon" src="/assets/icons/brands/facebook-f.svg" alt="facebook"></button>
                        <button class="btn btn-sm btn-twitter" type="button"><img class="c-icon" src="/assets/icons/brands/twitter.svg" alt="twitter"></button>
                        <button class="btn btn-sm btn-linkedin" type="button"><img class="c-icon" src="/assets/icons/brands/linkedin.svg" alt="linkedin"></button>
                        <button class="btn btn-sm btn-flickr" type="button"><img class="c-icon" src="/assets/icons/brands/flickr.svg" alt="flickr"></button>
                        <button class="btn btn-sm btn-tumblr" type="button"><img class="c-icon" src="/assets/icons/brands/tumblr.svg" alt="tumblr"></button>
                        <button class="btn btn-sm btn-xing" type="button"><img class="c-icon" src="/assets/icons/brands/xing.svg" alt="xing"></button>
                        <button class="btn btn-sm btn-github" type="button"><img class="c-icon" src="/assets/icons/brands/github.svg" alt="github"></button>
                        <button class="btn btn-sm btn-stack-overflow" type="button"><img class="c-icon" src="/assets/icons/brands/stack-overflow.svg" alt="stack-overflow"></button>
                        <button class="btn btn-sm btn-youtube" type="button"><img class="c-icon" src="/assets/icons/brands/youtube.svg" alt="youtube"></button>
                        <button class="btn btn-sm btn-dribbble" type="button"><img class="c-icon" src="/assets/icons/brands/dribbble.svg" alt="dribbble"></button>
                        <button class="btn btn-sm btn-instagram" type="button"><img class="c-icon" src="/assets/icons/brands/instagram.svg" alt="instagram"></button>
                        <button class="btn btn-sm btn-pinterest" type="button"><img class="c-icon" src="/assets/icons/brands/pinterest.svg" alt="pinterest"></button>
                        <button class="btn btn-sm btn-vk" type="button"><img class="c-icon" src="/assets/icons/brands/vk.svg" alt="vk"></button>
                        <button class="btn btn-sm btn-yahoo" type="button"><img class="c-icon" src="/assets/icons/brands/yahoo.svg" alt="yahoo"></button>
                        <button class="btn btn-sm btn-behance" type="button"><img class="c-icon" src="/assets/icons/brands/behance.svg" alt="behance"></button>
                        <button class="btn btn-sm btn-reddit" type="button"><img class="c-icon" src="/assets/icons/brands/reddit.svg" alt="reddit"></button>
                        <button class="btn btn-sm btn-vimeo" type="button"><img class="c-icon" src="/assets/icons/brands/vimeo.svg" alt="vimeo"></button>
                      </p>
                      <h6>Size Normal</h6>
                      <p>
                        <button class="btn btn-facebook" type="button"><img class="c-icon" src="/assets/icons/brands/facebook-f.svg" alt="facebook"></button>
                        <button class="btn btn-twitter" type="button"><img class="c-icon" src="/assets/icons/brands/twitter.svg" alt="twitter"></button>
                        <button class="btn btn-linkedin" type="button"><img class="c-icon" src="/assets/icons/brands/linkedin.svg" alt="linkedin"></button>
                        <button class="btn btn-flickr" type="button"><img class="c-icon" src="/assets/icons/brands/flickr.svg" alt="flickr"></button>
                        <button class="btn btn-tumblr" type="button"><img class="c-icon" src="/assets/icons/brands/tumblr.svg" alt="tumblr"></button>
                        <button class="btn btn-xing" type="button"><img class="c-icon" src="/assets/icons/brands/xing.svg" alt="xing"></button>
                        <button class="btn btn-github" type="button"><img class="c-icon" src="/assets/icons/brands/github.svg" alt="github"></button>
                        <button class="btn btn-stack-overflow" type="button"><img class="c-icon" src="/assets/icons/brands/stack-overflow.svg" alt="stack-overflow"></button>
                        <button class="btn btn-youtube" type="button"><img class="c-icon" src="/assets/icons/brands/youtube.svg" alt="youtube"></button>
                        <button class="btn btn-dribbble" type="button"><img class="c-icon" src="/assets/icons/brands/dribbble.svg" alt="dribbble"></button>
                        <button class="btn btn-instagram" type="button"><img class="c-icon" src="/assets/icons/brands/instagram.svg" alt="instagram"></button>
                        <button class="btn btn-pinterest" type="button"><img class="c-icon" src="/assets/icons/brands/pinterest.svg" alt="pinterest"></button>
                        <button class="btn btn-vk" type="button"><img class="c-icon" src="/assets/icons/brands/vk.svg" alt="vk"></button>
                        <button class="btn btn-yahoo" type="button"><img class="c-icon" src="/assets/icons/brands/yahoo.svg" alt="yahoo"></button>
                        <button class="btn btn-behance" type="button"><img class="c-icon" src="/assets/icons/brands/behance.svg" alt="behance"></button>
                        <button class="btn btn-reddit" type="button"><img class="c-icon" src="/assets/icons/brands/reddit.svg" alt="reddit"></button>
                        <button class="btn btn-vimeo" type="button"><img class="c-icon" src="/assets/icons/brands/vimeo.svg" alt="vimeo"></button>
                      </p>
                      <h6>Size Large<small>Add this class<code>.btn-lg</code></small></h6>
                      <p>
                        <button class="btn btn-lg btn-facebook" type="button"><img class="c-icon" src="/assets/icons/brands/facebook-f.svg" alt="facebook"></button>
                        <button class="btn btn-lg btn-twitter" type="button"><img class="c-icon" src="/assets/icons/brands/twitter.svg" alt="twitter"></button>
                        <button class="btn btn-lg btn-linkedin" type="button"><img class="c-icon" src="/assets/icons/brands/linkedin.svg" alt="linkedin"></button>
                        <button class="btn btn-lg btn-flickr" type="button"><img class="c-icon" src="/assets/icons/brands/flickr.svg" alt="flickr"></button>
                        <button class="btn btn-lg btn-tumblr" type="button"><img class="c-icon" src="/assets/icons/brands/tumblr.svg" alt="tumblr"></button>
                        <button class="btn btn-lg btn-xing" type="button"><img class="c-icon" src="/assets/icons/brands/xing.svg" alt="xing"></button>
                        <button class="btn btn-lg btn-github" type="button"><img class="c-icon" src="/assets/icons/brands/github.svg" alt="github"></button>
                        <button class="btn btn-lg btn-stack-overflow" type="button"><img class="c-icon" src="/assets/icons/brands/stack-overflow.svg" alt="stack-overflow"></button>
                        <button class="btn btn-lg btn-youtube" type="button"><img class="c-icon" src="/assets/icons/brands/youtube.svg" alt="youtube"></button>
                        <button class="btn btn-lg btn-dribbble" type="button"><img class="c-icon" src="/assets/icons/brands/dribbble.svg" alt="dribbble"></button>
                        <button class="btn btn-lg btn-instagram" type="button"><img class="c-icon" src="/assets/icons/brands/instagram.svg" alt="instagram"></button>
                        <button class="btn btn-lg btn-pinterest" type="button"><img class="c-icon" src="/assets/icons/brands/pinterest.svg" alt="pinterest"></button>
                        <button class="btn btn-lg btn-vk" type="button"><img class="c-icon" src="/assets/icons/brands/vk.svg" alt="vk"></button>
                        <button class="btn btn-lg btn-yahoo" type="button"><img class="c-icon" src="/assets/icons/brands/yahoo.svg" alt="yahoo"></button>
                        <button class="btn btn-lg btn-behance" type="button"><img class="c-icon" src="/assets/icons/brands/behance.svg" alt="behance"></button>
                        <button class="btn btn-lg btn-reddit" type="button"><img class="c-icon" src="/assets/icons/brands/reddit.svg" alt="reddit"></button>
                        <button class="btn btn-lg btn-vimeo" type="button"><img class="c-icon" src="/assets/icons/brands/vimeo.svg" alt="vimeo"></button>
                      </p>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
            </div>
          </div>

@endsection

@section('javascript')

@endsection