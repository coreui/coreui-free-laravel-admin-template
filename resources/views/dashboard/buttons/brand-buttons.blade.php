@extends('dashboard.base')

@section('content')

<div class="container-fluid">
            <style type="text/css">
              .btn {
                margin-bottom: 4px;
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
                        <button class="btn btn-sm btn-facebook" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-facebook-f"></use>
                          </svg><span>Facebook</span>
                        </button>
                        <button class="btn btn-sm btn-twitter" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-twitter"></use>
                          </svg><span>Twitter</span>
                        </button>
                        <button class="btn btn-sm btn-linkedin" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-linkedin"></use>
                          </svg><span>LinkedIn</span>
                        </button>
                        <button class="btn btn-sm btn-flickr" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-flickr"></use>
                          </svg><span>Flickr</span>
                        </button>
                        <button class="btn btn-sm btn-tumblr" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-tumblr"></use>
                          </svg><span>Tumblr</span>
                        </button>
                        <button class="btn btn-sm btn-xing" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-xing"></use>
                          </svg><span>Xing</span>
                        </button>
                        <button class="btn btn-sm btn-github" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-github"></use>
                          </svg><span>Github</span>
                        </button>
                        <button class="btn btn-sm btn-stack-overflow" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-stack-overflow"></use>
                          </svg><span>StackOverflow</span>
                        </button>
                        <button class="btn btn-sm btn-youtube" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-youtube"></use>
                          </svg><span>YouTube</span>
                        </button>
                        <button class="btn btn-sm btn-dribbble" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-dribbble"></use>
                          </svg><span>Dribbble</span>
                        </button>
                        <button class="btn btn-sm btn-instagram" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-instagram"></use>
                          </svg><span>Instagram</span>
                        </button>
                        <button class="btn btn-sm btn-pinterest" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-pinterest"></use>
                          </svg><span>Pinterest</span>
                        </button>
                        <button class="btn btn-sm btn-vk" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-vk"></use>
                          </svg><span>VK</span>
                        </button>
                        <button class="btn btn-sm btn-yahoo" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-yahoo"></use>
                          </svg><span>Yahoo</span>
                        </button>
                        <button class="btn btn-sm btn-behance" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-behance"></use>
                          </svg><span>Behance</span>
                        </button>
                        <button class="btn btn-sm btn-reddit" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-reddit"></use>
                          </svg><span>Reddit</span>
                        </button>
                        <button class="btn btn-sm btn-vimeo" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-vimeo"></use>
                          </svg><span>Vimeo</span>
                        </button>
                      </p>
                      <h6>Size Normal</h6>
                      <p>
                        <button class="btn btn-facebook" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-facebook-f"></use>
                          </svg><span>Facebook</span>
                        </button>
                        <button class="btn btn-twitter" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-twitter"></use>
                          </svg><span>Twitter</span>
                        </button>
                        <button class="btn btn-linkedin" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-linkedin"></use>
                          </svg><span>LinkedIn</span>
                        </button>
                        <button class="btn btn-flickr" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-flickr"></use>
                          </svg><span>Flickr</span>
                        </button>
                        <button class="btn btn-tumblr" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-tumblr"></use>
                          </svg><span>Tumblr</span>
                        </button>
                        <button class="btn btn-xing" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-xing"></use>
                          </svg><span>Xing</span>
                        </button>
                        <button class="btn btn-github" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-github"></use>
                          </svg><span>Github</span>
                        </button>
                        <button class="btn btn-stack-overflow" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-stack-overflow"></use>
                          </svg><span>StackOverflow</span>
                        </button>
                        <button class="btn btn-youtube" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-youtube"></use>
                          </svg><span>YouTube</span>
                        </button>
                        <button class="btn btn-dribbble" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-dribbble"></use>
                          </svg><span>Dribbble</span>
                        </button>
                        <button class="btn btn-instagram" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-instagram"></use>
                          </svg><span>Instagram</span>
                        </button>
                        <button class="btn btn-pinterest" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-pinterest"></use>
                          </svg><span>Pinterest</span>
                        </button>
                        <button class="btn btn-vk" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-vk"></use>
                          </svg><span>VK</span>
                        </button>
                        <button class="btn btn-yahoo" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-yahoo"></use>
                          </svg><span>Yahoo</span>
                        </button>
                        <button class="btn btn-behance" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-behance"></use>
                          </svg><span>Behance</span>
                        </button>
                        <button class="btn btn-reddit" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-reddit"></use>
                          </svg><span>Reddit</span>
                        </button>
                        <button class="btn btn-vimeo" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-vimeo"></use>
                          </svg><span>Vimeo</span>
                        </button>
                      </p>
                      <h6>Size Large<small>Add this class<code>.btn-lg</code></small></h6>
                      <p>
                        <button class="btn btn-lg btn-facebook" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-facebook-f"></use>
                          </svg><span>Facebook</span>
                        </button>
                        <button class="btn btn-lg btn-twitter" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-twitter"></use>
                          </svg><span>Twitter</span>
                        </button>
                        <button class="btn btn-lg btn-linkedin" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-linkedin"></use>
                          </svg><span>LinkedIn</span>
                        </button>
                        <button class="btn btn-lg btn-flickr" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-flickr"></use>
                          </svg><span>Flickr</span>
                        </button>
                        <button class="btn btn-lg btn-tumblr" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-tumblr"></use>
                          </svg><span>Tumblr</span>
                        </button>
                        <button class="btn btn-lg btn-xing" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-xing"></use>
                          </svg><span>Xing</span>
                        </button>
                        <button class="btn btn-lg btn-github" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-github"></use>
                          </svg><span>Github</span>
                        </button>
                        <button class="btn btn-lg btn-stack-overflow" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-stack-overflow"></use>
                          </svg><span>StackOverflow</span>
                        </button>
                        <button class="btn btn-lg btn-youtube" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-youtube"></use>
                          </svg><span>YouTube</span>
                        </button>
                        <button class="btn btn-lg btn-dribbble" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-dribbble"></use>
                          </svg><span>Dribbble</span>
                        </button>
                        <button class="btn btn-lg btn-instagram" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-instagram"></use>
                          </svg><span>Instagram</span>
                        </button>
                        <button class="btn btn-lg btn-pinterest" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-pinterest"></use>
                          </svg><span>Pinterest</span>
                        </button>
                        <button class="btn btn-lg btn-vk" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-vk"></use>
                          </svg><span>VK</span>
                        </button>
                        <button class="btn btn-lg btn-yahoo" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-yahoo"></use>
                          </svg><span>Yahoo</span>
                        </button>
                        <button class="btn btn-lg btn-behance" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-behance"></use>
                          </svg><span>Behance</span>
                        </button>
                        <button class="btn btn-lg btn-reddit" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-reddit"></use>
                          </svg><span>Reddit</span>
                        </button>
                        <button class="btn btn-lg btn-vimeo" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="/icons/sprites/brand.svg#cib-vimeo"></use>
                          </svg><span>Vimeo</span>
                        </button>
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
                        <button class="btn btn-sm btn-facebook" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-facebook-f"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-twitter" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-twitter"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-linkedin" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-linkedin"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-flickr" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-flickr"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-tumblr" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-tumblr"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-xing" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-xing"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-github" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-github"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-stack-overflow" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-stack-overflow"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-youtube" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-youtube"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-dribbble" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-dribbble"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-instagram" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-instagram"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-pinterest" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-pinterest"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-vk" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-vk"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-yahoo" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-yahoo"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-behance" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-behance"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-reddit" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-reddit"></use>
                          </svg>
                        </button>
                        <button class="btn btn-sm btn-vimeo" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-vimeo"></use>
                          </svg>
                        </button>
                      </p>
                      <h6>Size Normal</h6>
                      <p>
                        <button class="btn btn-facebook" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-facebook-f"></use>
                          </svg>
                        </button>
                        <button class="btn btn-twitter" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-twitter"></use>
                          </svg>
                        </button>
                        <button class="btn btn-linkedin" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-linkedin"></use>
                          </svg>
                        </button>
                        <button class="btn btn-flickr" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-flickr"></use>
                          </svg>
                        </button>
                        <button class="btn btn-tumblr" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-tumblr"></use>
                          </svg>
                        </button>
                        <button class="btn btn-xing" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-xing"></use>
                          </svg>
                        </button>
                        <button class="btn btn-github" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-github"></use>
                          </svg>
                        </button>
                        <button class="btn btn-stack-overflow" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-stack-overflow"></use>
                          </svg>
                        </button>
                        <button class="btn btn-youtube" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-youtube"></use>
                          </svg>
                        </button>
                        <button class="btn btn-dribbble" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-dribbble"></use>
                          </svg>
                        </button>
                        <button class="btn btn-instagram" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-instagram"></use>
                          </svg>
                        </button>
                        <button class="btn btn-pinterest" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-pinterest"></use>
                          </svg>
                        </button>
                        <button class="btn btn-vk" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-vk"></use>
                          </svg>
                        </button>
                        <button class="btn btn-yahoo" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-yahoo"></use>
                          </svg>
                        </button>
                        <button class="btn btn-behance" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-behance"></use>
                          </svg>
                        </button>
                        <button class="btn btn-reddit" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-reddit"></use>
                          </svg>
                        </button>
                        <button class="btn btn-vimeo" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-vimeo"></use>
                          </svg>
                        </button>
                      </p>
                      <h6>Size Large<small>Add this class<code>.btn-lg</code></small></h6>
                      <p>
                        <button class="btn btn-lg btn-facebook" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-facebook-f"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-twitter" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-twitter"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-linkedin" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-linkedin"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-flickr" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-flickr"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-tumblr" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-tumblr"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-xing" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-xing"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-github" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-github"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-stack-overflow" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-stack-overflow"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-youtube" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-youtube"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-dribbble" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-dribbble"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-instagram" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-instagram"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-pinterest" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-pinterest"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-vk" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-vk"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-yahoo" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-yahoo"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-behance" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-behance"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-reddit" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-reddit"></use>
                          </svg>
                        </button>
                        <button class="btn btn-lg btn-vimeo" type="button">
                          <svg class="c-icon">
                            <use xlink:href="/icons/sprites/brand.svg#cib-vimeo"></use>
                          </svg>
                        </button>
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