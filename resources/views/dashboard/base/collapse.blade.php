@extends('dashboard.base')

@section('content')  
  
          <div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <div class="col-sm-12 col-xl-6">
                  <div class="card">
                    <div class="card-header"> Collapse
                      <div class="card-header-actions"><a class="card-header-action" href="http://coreui.io/docs/components/bootstrap-collapse/" target="_blank"><small class="text-muted">docs</small></a></div>
                    </div>
                    <div class="card-body">
                      <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Link with href</a>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Button with data-target</button>
                      </p>
                      <div class="collapse" id="collapseExample">
                        <div class="card card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header"> Collapse<small>multiple targets</small></div>
                    <div class="card-body">
                      <p><a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle second element</button>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                      </p>
                      <div class="row">
                        <div class="col-sm-12 col-md-6">
                          <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</div>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                          <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-xl-6">
                  <div class="card">
                    <div class="card-header"> Collapse<small>accordion</small></div>
                    <div class="card-body">
                      <div class="accordion" id="accordion" role="tablist">
                        <div class="card mb-0">
                          <div class="card-header" id="headingOne" role="tab">
                            <h5 class="mb-0"><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Collapsible Group Item #1</a></h5>
                          </div>
                          <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                          </div>
                        </div>
                        <div class="card mb-0">
                          <div class="card-header" id="headingTwo" role="tab">
                            <h5 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Collapsible Group Item #2</a></h5>
                          </div>
                          <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                          </div>
                        </div>
                        <div class="card mb-0">
                          <div class="card-header" id="headingThree" role="tab">
                            <h5 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Collapsible Group Item #3</a></h5>
                          </div>
                          <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header"> Collapse<small>custom accordion</small></div>
                    <div class="card-body">
                      <div id="exampleAccordion" data-children=".item">
                        <div class="item"><a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion1" aria-expanded="true" aria-controls="exampleAccordion1">Toggle item</a>
                          <div class="collapse show" id="exampleAccordion1" role="tabpanel">
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
                          </div>
                        </div>
                        <div class="item"><a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" aria-expanded="false" aria-controls="exampleAccordion2">Toggle item 2</a>
                          <div class="collapse" id="exampleAccordion2" role="tabpanel">
                            <p class="mb-3">Donec at ipsum dignissim, rutrum turpis scelerisque, tristique lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec dui turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
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

@section('javascript')

@endsection