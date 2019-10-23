@extends('coreui.base')

@section('content')

<div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header"><strong>Credit Card</strong> <small>Form</small></div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Enter your name">
                          </div>
                        </div>
                      </div>
                      <!-- /.row-->
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="ccnumber">Credit Card Number</label>
                            <input class="form-control" id="ccnumber" type="text" placeholder="0000 0000 0000 0000">
                          </div>
                        </div>
                      </div>
                      <!-- /.row-->
                      <div class="row">
                        <div class="form-group col-sm-4">
                          <label for="ccmonth">Month</label>
                          <select class="form-control" id="ccmonth">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                          </select>
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="ccyear">Year</label>
                          <select class="form-control" id="ccyear">
                            <option>2014</option>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                          </select>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="cvv">CVV/CVC</label>
                            <input class="form-control" id="cvv" type="text" placeholder="123">
                          </div>
                        </div>
                      </div>
                      <!-- /.row-->
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header"><strong>Company</strong> <small>Form</small></div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="company">Company</label>
                        <input class="form-control" id="company" type="text" placeholder="Enter your company name">
                      </div>
                      <div class="form-group">
                        <label for="vat">VAT</label>
                        <input class="form-control" id="vat" type="text" placeholder="PL1234567890">
                      </div>
                      <div class="form-group">
                        <label for="street">Street</label>
                        <input class="form-control" id="street" type="text" placeholder="Enter street name">
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-8">
                          <label for="city">City</label>
                          <input class="form-control" id="city" type="text" placeholder="Enter your city">
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="postal-code">Postal Code</label>
                          <input class="form-control" id="postal-code" type="text" placeholder="Postal Code">
                        </div>
                      </div>
                      <!-- /.row-->
                      <div class="form-group">
                        <label for="country">Country</label>
                        <input class="form-control" id="country" type="text" placeholder="Country name">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header"><strong>Basic Form</strong> Elements</div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label">Static</label>
                          <div class="col-md-9">
                            <p class="form-control-static">Username</p>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="text-input">Text Input</label>
                          <div class="col-md-9">
                            <input class="form-control" id="text-input" type="text" name="text-input" placeholder="Text"><span class="help-block">This is a help text</span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="email-input">Email Input</label>
                          <div class="col-md-9">
                            <input class="form-control" id="email-input" type="email" name="email-input" placeholder="Enter Email" autocomplete="email"><span class="help-block">Please enter your email</span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="password-input">Password</label>
                          <div class="col-md-9">
                            <input class="form-control" id="password-input" type="password" name="password-input" placeholder="Password" autocomplete="new-password"><span class="help-block">Please enter a complex password</span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="date-input">Date Input</label>
                          <div class="col-md-9">
                            <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date"><span class="help-block">Please enter a valid date</span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="disabled-input">Disabled Input</label>
                          <div class="col-md-9">
                            <input class="form-control" id="disabled-input" type="text" name="disabled-input" placeholder="Disabled" disabled="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="textarea-input">Textarea</label>
                          <div class="col-md-9">
                            <textarea class="form-control" id="textarea-input" name="textarea-input" rows="9" placeholder="Content.."></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="select1">Select</label>
                          <div class="col-md-9">
                            <select class="form-control" id="select1" name="select1">
                              <option value="0">Please select</option>
                              <option value="1">Option #1</option>
                              <option value="2">Option #2</option>
                              <option value="3">Option #3</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="select2">Select Large</label>
                          <div class="col-md-9">
                            <select class="form-control form-control-lg" id="select2" name="select2">
                              <option value="0">Please select</option>
                              <option value="1">Option #1</option>
                              <option value="2">Option #2</option>
                              <option value="3">Option #3</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="select3">Select Small</label>
                          <div class="col-md-9">
                            <select class="form-control form-control-sm" id="select3" name="select3">
                              <option value="0">Please select</option>
                              <option value="1">Option #1</option>
                              <option value="2">Option #2</option>
                              <option value="3">Option #3</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="disabledSelect">Disabled Select</label>
                          <div class="col-md-9">
                            <select class="form-control" id="disabledSelect" disabled="">
                              <option value="0">Please select</option>
                              <option value="1">Option #1</option>
                              <option value="2">Option #2</option>
                              <option value="3">Option #3</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="multiple-select">Multiple select</label>
                          <div class="col-md-9">
                            <select class="form-control" id="multiple-select" name="multiple-select" size="5" multiple="">
                              <option value="1">Option #1</option>
                              <option value="2">Option #2</option>
                              <option value="3">Option #3</option>
                              <option value="4">Option #4</option>
                              <option value="5">Option #5</option>
                              <option value="6">Option #6</option>
                              <option value="7">Option #7</option>
                              <option value="8">Option #8</option>
                              <option value="9">Option #9</option>
                              <option value="10">Option #10</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label">Radios</label>
                          <div class="col-md-9 col-form-label">
                            <div class="form-check">
                              <input class="form-check-input" id="radio1" type="radio" value="radio1" name="radios">
                              <label class="form-check-label" for="radio1">Option 1</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="radio2" type="radio" value="radio2" name="radios">
                              <label class="form-check-label" for="radio2">Option 2</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="radio3" type="radio" value="radio2" name="radios">
                              <label class="form-check-label" for="radio3">Option 3</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label">Inline Radios</label>
                          <div class="col-md-9 col-form-label">
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="inline-radio1" type="radio" value="option1" name="inline-radios">
                              <label class="form-check-label" for="inline-radio1">One</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="inline-radio2" type="radio" value="option2" name="inline-radios">
                              <label class="form-check-label" for="inline-radio2">Two</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="inline-radio3" type="radio" value="option3" name="inline-radios">
                              <label class="form-check-label" for="inline-radio3">Three</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label">Checkboxes</label>
                          <div class="col-md-9 col-form-label">
                            <div class="form-check checkbox">
                              <input class="form-check-input" id="check1" type="checkbox" value="">
                              <label class="form-check-label" for="check1">Option 1</label>
                            </div>
                            <div class="form-check checkbox">
                              <input class="form-check-input" id="check2" type="checkbox" value="">
                              <label class="form-check-label" for="check2">Option 2</label>
                            </div>
                            <div class="form-check checkbox">
                              <input class="form-check-input" id="check3" type="checkbox" value="">
                              <label class="form-check-label" for="check3">Option 3</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label">Inline Checkboxes</label>
                          <div class="col-md-9 col-form-label">
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="inline-checkbox1" type="checkbox" value="check1">
                              <label class="form-check-label" for="inline-checkbox1">One</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="inline-checkbox2" type="checkbox" value="check2">
                              <label class="form-check-label" for="inline-checkbox2">Two</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="inline-checkbox3" type="checkbox" value="check3">
                              <label class="form-check-label" for="inline-checkbox3">Three</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="file-input">File input</label>
                          <div class="col-md-9">
                            <input id="file-input" type="file" name="file-input">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="file-multiple-input">Multiple File input</label>
                          <div class="col-md-9">
                            <input id="file-multiple-input" type="file" name="file-multiple-input" multiple="">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                      <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header"><strong>Inline</strong> Form</div>
                    <div class="card-body">
                      <form class="form-inline" action="" method="post">
                        <div class="form-group">
                          <label class="mr-1" for="exampleInputName2">Name</label>
                          <input class="form-control" id="exampleInputName2" type="text" placeholder="Jane Doe" autocomplete="name">
                        </div>
                        <div class="form-group">
                          <label class="mx-1" for="exampleInputEmail2">Email</label>
                          <input class="form-control" id="exampleInputEmail2" type="email" placeholder="jane.doe@example.com" autocomplete="email">
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                      <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header"><strong>Horizontal</strong> Form</div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post">
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="hf-email">Email</label>
                          <div class="col-md-9">
                            <input class="form-control" id="hf-email" type="email" name="hf-email" placeholder="Enter Email.." autocomplete="email"><span class="help-block">Please enter your email</span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="hf-password">Password</label>
                          <div class="col-md-9">
                            <input class="form-control" id="hf-password" type="password" name="hf-password" placeholder="Enter Password.." autocomplete="current-password"><span class="help-block">Please enter your password</span>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                      <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header"><strong>Normal</strong> Form</div>
                    <div class="card-body">
                      <form action="" method="post">
                        <div class="form-group">
                          <label for="nf-email">Email</label>
                          <input class="form-control" id="nf-email" type="email" name="nf-email" placeholder="Enter Email.." autocomplete="email"><span class="help-block">Please enter your email</span>
                        </div>
                        <div class="form-group">
                          <label for="nf-password">Password</label>
                          <input class="form-control" id="nf-password" type="password" name="nf-password" placeholder="Enter Password.." autocomplete="current-password"><span class="help-block">Please enter your password</span>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                      <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">Input <strong>Grid</strong></div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post">
                        <div class="form-group row">
                          <div class="col-sm-3">
                            <input class="form-control" type="text" placeholder=".col-sm-3">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-4">
                            <input class="form-control" type="text" placeholder=".col-sm-4">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-5">
                            <input class="form-control" type="text" placeholder=".col-sm-5">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-6">
                            <input class="form-control" type="text" placeholder=".col-sm-6">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-7">
                            <input class="form-control" type="text" placeholder=".col-sm-7">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-8">
                            <input class="form-control" type="text" placeholder=".col-sm-8">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-9">
                            <input class="form-control" type="text" placeholder=".col-sm-9">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder=".col-sm-10">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-11">
                            <input class="form-control" type="text" placeholder=".col-sm-11">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-12">
                            <input class="form-control" type="text" placeholder=".col-sm-12">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit"> Login</button>
                      <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">Input <strong>Sizes</strong></div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label" for="input-small">Small Input</label>
                          <div class="col-sm-6">
                            <input class="form-control form-control-sm" id="input-small" type="text" name="input-small" placeholder=".form-control-sm">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label" for="input-normal">Normal Input</label>
                          <div class="col-sm-6">
                            <input class="form-control" id="input-normal" type="text" name="input-normal" placeholder="Normal">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label" for="input-large">Large Input</label>
                          <div class="col-sm-6">
                            <input class="form-control form-control-lg" id="input-large" type="text" name="input-large" placeholder=".form-control-lg">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                      <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header"><strong>Validation states</strong> Form</div>
                    <div class="card-body">
                      <div class="form-group">
                        <label class="form-col-form-label" for="inputSuccess1">Input with success</label>
                        <input class="form-control is-valid" id="inputSuccess1" type="text">
                      </div>
                      <div class="form-group">
                        <label class="form-col-form-label" for="inputError1">Input with error</label>
                        <input class="form-control is-invalid" id="inputError1" type="text">
                        <div class="invalid-feedback">Please provide a valid informations.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header"><strong>Validation</strong> <code>was-validated</code></div>
                    <div class="card-body was-validated">
                      <div class="form-group">
                        <label class="form-col-form-label" for="inputSuccess2">Input with success</label>
                        <input class="form-control is-valid" id="inputSuccess2" type="text">
                      </div>
                      <div class="form-group">
                        <label class="form-col-form-label" for="inputError2">Input required</label>
                        <input class="form-control is-invalid" id="inputError2" type="text" required="">
                        <div class="invalid-feedback">Please provide a valid informations.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-header"><strong>Icon/Text</strong> Groups</div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post">
                        <div class="form-group row">
                          <div class="col-md-12">
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text">
                                  <svg class="c-icon">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                                  </svg></span></div>
                              <input class="form-control" id="input1-group1" type="text" name="input1-group1" placeholder="Username" autocomplete="username">
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-12">
                            <div class="input-group">
                              <input class="form-control" id="input2-group1" type="email" name="input2-group1" placeholder="Email" autocomplete="email">
                              <div class="input-group-append"><span class="input-group-text">
                                  <svg class="c-icon">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-envelope-open"></use>
                                  </svg></span></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-12">
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text">
                                  <svg class="c-icon">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-euro"></use>
                                  </svg></span></div>
                              <input class="form-control" id="input3-group1" type="text" name="input3-group1" placeholder="..">
                              <div class="input-group-append"><span class="input-group-text">.00</span></div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-sm btn-success" type="submit"> Submit</button>
                      <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-header"><strong>Buttons</strong> Groups</div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post">
                        <div class="form-group row">
                          <div class="col-md-12">
                            <div class="input-group"><span class="input-group-prepend">
                                <button class="btn btn-primary" type="button">
                                  <svg class="c-icon">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-magnifying-glass"></use>
                                  </svg> Search
                                </button></span>
                              <input class="form-control" id="input1-group2" type="text" name="input1-group2" placeholder="Username" autocomplete="username">
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-12">
                            <div class="input-group">
                              <input class="form-control" id="input2-group2" type="email" name="input2-group2" placeholder="Email" autocomplete="email"><span class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit</button></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-12">
                            <div class="input-group"><span class="input-group-prepend">
                                <button class="btn btn-primary" type="button">
                                  <svg class="c-icon">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-facebook"></use>
                                  </svg>
                                </button></span>
                              <input class="form-control" id="input3-group2" type="text" name="input3-group2" placeholder="Search"><span class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                  <svg class="c-icon">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-twitter"></use>
                                  </svg>
                                </button></span>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-sm btn-success" type="submit"> Submit</button>
                      <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-header"><strong>Dropdowns</strong> Groups</div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post">
                        <div class="form-group row">
                          <div class="col-md-12">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                  <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                                </div>
                              </div>
                              <input class="form-control" id="input1-group3" type="text" name="input1-group3" placeholder="Username" autocomplete="username">
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-12">
                            <div class="input-group">
                              <input class="form-control" id="input2-group3" type="email" name="input2-group3" placeholder="Email" autocomplete="email">
                              <div class="input-group-append">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                  <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <button class="btn btn-primary" type="button">Action</button>
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" type="button" data-toggle="dropdown"><span class="caret"></span></button>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                  <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                                </div>
                              </div>
                              <input class="form-control" id="input3-group3" type="text" name="input3-group3" placeholder="..">
                              <div class="input-group-append">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="caret"></span></button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                  <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-sm btn-success" type="submit"> Submit</button>
                      <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">Use the grid for big devices! <small><code>.col-lg-*</code> <code> .col-md-*</code> <code> .col-sm-*</code></small></div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post">
                        <div class="form-group row">
                          <div class="col-md-8">
                            <input class="form-control" type="text" placeholder=".col-md-8">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control" type="text" placeholder=".col-md-4">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-7">
                            <input class="form-control" type="text" placeholder=".col-md-7">
                          </div>
                          <div class="col-md-5">
                            <input class="form-control" type="text" placeholder=".col-md-5">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-6">
                            <input class="form-control" type="text" placeholder=".col-md-6">
                          </div>
                          <div class="col-md-6">
                            <input class="form-control" type="text" placeholder=".col-md-6">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-5">
                            <input class="form-control" type="text" placeholder=".col-md-5">
                          </div>
                          <div class="col-md-7">
                            <input class="form-control" type="text" placeholder=".col-md-7">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-4">
                            <input class="form-control" type="text" placeholder=".col-md-4">
                          </div>
                          <div class="col-md-8">
                            <input class="form-control" type="text" placeholder=".col-md-8">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit">Action</button>
                      <button class="btn btn-sm btn-danger" type="button">Action</button>
                      <button class="btn btn-sm btn-warning" type="button">Action</button>
                      <button class="btn btn-sm btn-info" type="button">Action</button>
                      <button class="btn btn-sm btn-success" type="button">Action</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">Input Grid for small devices! <small><code>.col-*</code></small></div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post">
                        <div class="form-group row">
                          <div class="col-4">
                            <input class="form-control" type="text" placeholder=".col-4">
                          </div>
                          <div class="col-8">
                            <input class="form-control" type="text" placeholder=".col-8">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-5">
                            <input class="form-control" type="text" placeholder=".col-5">
                          </div>
                          <div class="col-7">
                            <input class="form-control" type="text" placeholder=".col-7">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-6">
                            <input class="form-control" type="text" placeholder=".col-6">
                          </div>
                          <div class="col-6">
                            <input class="form-control" type="text" placeholder=".col-6">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-7">
                            <input class="form-control" type="text" placeholder=".col-5">
                          </div>
                          <div class="col-5">
                            <input class="form-control" type="text" placeholder=".col-5">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-8">
                            <input class="form-control" type="text" placeholder=".col-8">
                          </div>
                          <div class="col-4">
                            <input class="form-control" type="text" placeholder=".col-4">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit">Action</button>
                      <button class="btn btn-sm btn-danger" type="button">Action</button>
                      <button class="btn btn-sm btn-warning" type="button">Action</button>
                      <button class="btn btn-sm btn-info" type="button">Action</button>
                      <button class="btn btn-sm btn-success" type="button">Action</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-header">Example Form</div>
                    <div class="card-body">
                      <form action="" method="post">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Username</span></div>
                            <input class="form-control" id="username3" type="text" name="username3" autocomplete="username">
                            <div class="input-group-append"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                                </svg></span></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Email</span></div>
                            <input class="form-control" id="email3" type="email" name="email3" autocomplete="email">
                            <div class="input-group-append"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-envelope-open"></use>
                                </svg></span></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Password</span></div>
                            <input class="form-control" id="password3" type="password" name="password3" autocomplete="new-password">
                            <div class="input-group-append"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked"></use>
                                </svg></span></div>
                          </div>
                        </div>
                        <div class="form-group form-actions">
                          <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-header">Example Form</div>
                    <div class="card-body">
                      <form action="" method="post">
                        <div class="form-group">
                          <div class="input-group">
                            <input class="form-control" id="username2" type="text" name="username2" placeholder="Username" autocomplete="username">
                            <div class="input-group-append"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                                </svg></span></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <input class="form-control" id="email2" type="email" name="email2" placeholder="Email" autocomplete="email">
                            <div class="input-group-append"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-envelope-open"></use>
                                </svg></span></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <input class="form-control" id="password2" type="password" name="password2" placeholder="Password" autocomplete="new-password">
                            <div class="input-group-append"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked"></use>
                                </svg></span></div>
                          </div>
                        </div>
                        <div class="form-group form-actions">
                          <button class="btn btn-sm btn-secondary" type="submit">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-header">Example Form</div>
                    <div class="card-body">
                      <form action="" method="post">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                                </svg></span></div>
                            <input class="form-control" id="username" type="text" name="username" placeholder="Username" autocomplete="username">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-envelope-open"></use>
                                </svg></span></div>
                            <input class="form-control" id="email" type="email" name="email" placeholder="Email" autocomplete="email">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked"></use>
                                </svg></span></div>
                            <input class="form-control" id="password" type="password" name="password" placeholder="Password" autocomplete="new-password">
                          </div>
                        </div>
                        <div class="form-group form-actions">
                          <button class="btn btn-sm btn-success" type="submit">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">Form Elements</div>
                    <div class="card-body">
                      <form class="form-horizontal">
                        <div class="form-group">
                          <label class="col-form-label" for="prependedInput">Prepended text</label>
                          <div class="controls">
                            <div class="input-prepend input-group">
                              <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                              <input class="form-control" id="prependedInput" size="16" type="text">
                            </div>
                            <p class="help-block">Here's some help text</p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="appendedInput">Appended text</label>
                          <div class="controls">
                            <div class="input-group">
                              <input class="form-control" id="appendedInput" size="16" type="text">
                              <div class="input-group-append"><span class="input-group-text">.00</span></div>
                            </div><span class="help-block">Here's more help text</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="appendedPrependedInput">Append and prepend</label>
                          <div class="controls">
                            <div class="input-prepend input-group">
                              <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                              <input class="form-control" id="appendedPrependedInput" size="16" type="text">
                              <div class="input-group-append"><span class="input-group-text">.00</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="appendedInputButton">Append with button</label>
                          <div class="controls">
                            <div class="input-group">
                              <input class="form-control" id="appendedInputButton" size="16" type="text"><span class="input-group-append">
                                <button class="btn btn-secondary" type="button">Go!</button></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="appendedInputButtons">Two-button append</label>
                          <div class="controls">
                            <div class="input-group">
                              <input class="form-control" id="appendedInputButtons" size="16" type="text"><span class="input-group-append">
                                <button class="btn btn-secondary" type="button">Search</button>
                                <button class="btn btn-secondary" type="button">Options</button></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-actions">
                          <button class="btn btn-primary" type="submit">Save changes</button>
                          <button class="btn btn-secondary" type="button">Cancel</button>
                        </div>
                      </form>
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