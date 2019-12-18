@extends('dashboard.base')

@section('content')

          <div class="container-fluid">
            <div class="fade-in">
              <div class="card">
                <div class="card-header"><strong>Standard Buttons</strong></div>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Normal</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-primary" type="button">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-secondary" type="button">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-success" type="button">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-warning" type="button">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-danger" type="button">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-info" type="button">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-light" type="button">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-dark" type="button">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-link" type="button">Link</button>
                    </div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Active State</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-primary active" type="button" aria-pressed="true">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-secondary active" type="button" aria-pressed="true">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-success active" type="button" aria-pressed="true">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-warning active" type="button" aria-pressed="true">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-danger active" type="button" aria-pressed="true">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-info active" type="button" aria-pressed="true">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-light active" type="button" aria-pressed="true">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-dark active" type="button" aria-pressed="true">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-link active" type="button" aria-pressed="true">Link</button>
                    </div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Disabled</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-primary" type="button" disabled="">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-secondary" type="button" disabled="">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-success" type="button" disabled="">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-warning" type="button" disabled="">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-danger" type="button" disabled="">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-info" type="button" disabled="">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-light" type="button" disabled="">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-dark" type="button" disabled="">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-link" type="button" disabled="">Link</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header"><strong>Outline Buttons</strong></div>
                <div class="card-body">
                  <p>Use<code>.btn-outline-*</code> class for outline buttons.</p>
                  <div class="row align-items-center">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Normal</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-primary" type="button">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-secondary" type="button">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-success" type="button">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-warning" type="button">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-danger" type="button">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-info" type="button">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-light" type="button">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-dark" type="button">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Active State</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-primary active" type="button" aria-pressed="true">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-secondary active" type="button" aria-pressed="true">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-success active" type="button" aria-pressed="true">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-warning active" type="button" aria-pressed="true">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-danger active" type="button" aria-pressed="true">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-info active" type="button" aria-pressed="true">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-light active" type="button" aria-pressed="true">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-dark active" type="button" aria-pressed="true">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Disabled</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-primary" type="button" disabled="">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-secondary" type="button" disabled="">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-success" type="button" disabled="">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-warning" type="button" disabled="">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-danger" type="button" disabled="">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-info" type="button" disabled="">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-light" type="button" disabled="">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-outline-dark" type="button" disabled="">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header"><strong>Ghost Buttons</strong></div>
                <div class="card-body">
                  <p>Use<code>.btn-ghost-*</code> class for ghost buttons.</p>
                  <div class="row align-items-center">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Normal</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-primary" type="button">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-secondary" type="button">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-success" type="button">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-warning" type="button">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-danger" type="button">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-info" type="button">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-light" type="button">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-dark" type="button">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Active State</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-primary active" type="button" aria-pressed="true">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-secondary active" type="button" aria-pressed="true">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-success active" type="button" aria-pressed="true">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-warning active" type="button" aria-pressed="true">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-danger active" type="button" aria-pressed="true">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-info active" type="button" aria-pressed="true">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-light active" type="button" aria-pressed="true">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-dark active" type="button" aria-pressed="true">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Disabled</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-primary" type="button" disabled="">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-secondary" type="button" disabled="">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-success" type="button" disabled="">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-warning" type="button" disabled="">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-danger" type="button" disabled="">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-info" type="button" disabled="">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-light" type="button" disabled="">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-block btn-ghost-dark" type="button" disabled="">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header"><strong>Square Buttons</strong></div>
                <div class="card-body">
                  <p>Use<code>.btn-square</code> class for square buttons.</p>
                  <div class="row align-items-center">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Normal</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-primary" type="button">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-secondary" type="button">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-success" type="button">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-warning" type="button">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-danger" type="button">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-info" type="button">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-light" type="button">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-dark" type="button">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-link" type="button">Link</button>
                    </div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Active State</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-primary active" type="button" aria-pressed="true">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-secondary active" type="button" aria-pressed="true">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-success active" type="button" aria-pressed="true">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-warning active" type="button" aria-pressed="true">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-danger active" type="button" aria-pressed="true">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-info active" type="button" aria-pressed="true">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-light active" type="button" aria-pressed="true">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-dark active" type="button" aria-pressed="true">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-link active" type="button" aria-pressed="true">Link</button>
                    </div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Disabled</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-primary" type="button" disabled="">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-secondary" type="button" disabled="">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-success" type="button" disabled="">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-warning" type="button" disabled="">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-danger" type="button" disabled="">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-info" type="button" disabled="">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-light" type="button" disabled="">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-dark" type="button" disabled="">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-square btn-block btn-link" type="button" disabled="">Link</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header"><strong>Pill Buttons</strong></div>
                <div class="card-body">
                  <p>Use<code>.btn-pill</code> class for pill buttons.</p>
                  <div class="row align-items-center">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Normal</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-primary" type="button">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-secondary" type="button">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-success" type="button">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-warning" type="button">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-danger" type="button">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-info" type="button">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-light" type="button">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-dark" type="button">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-link" type="button">Link</button>
                    </div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Active State</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-primary active" type="button" aria-pressed="true">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-secondary active" type="button" aria-pressed="true">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-success active" type="button" aria-pressed="true">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-warning active" type="button" aria-pressed="true">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-danger active" type="button" aria-pressed="true">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-info active" type="button" aria-pressed="true">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-light active" type="button" aria-pressed="true">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-dark active" type="button" aria-pressed="true">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-link active" type="button" aria-pressed="true">Link</button>
                    </div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Disabled</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-primary" type="button" disabled="">Primary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-secondary" type="button" disabled="">Secondary</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-success" type="button" disabled="">Success</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-warning" type="button" disabled="">Warning</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-danger" type="button" disabled="">Danger</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-info" type="button" disabled="">Info</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-light" type="button" disabled="">Light</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-dark" type="button" disabled="">Dark</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                      <button class="btn btn-pill btn-block btn-link" type="button" disabled="">Link</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header"><strong>Sizes</strong></div>
                <div class="card-body">
                  <p>Fancy larger or smaller buttons? Add<code>.btn-lg</code> or<code>.btn-sm</code> for additional sizes.</p>
                  <div class="row align-items-center">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Small add<code>.btn-sm</code></div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-sm btn-primary" type="button">Standard Button</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-sm btn-outline-secondary" type="button">Outline Button</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-sm btn-ghost-success" type="button">Ghost Button</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-sm btn-square btn-warning" type="button">Square Button</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-sm btn-pill btn-danger" type="button">Pill Button</button>
                    </div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Normal</div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-primary" type="button">Standard Button</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-outline-secondary" type="button">Outline Button</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-ghost-success" type="button">Ghost Button</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-square btn-warning" type="button">Square Button</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-pill btn-danger" type="button">Pill Button</button>
                    </div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-12 col-xl mb-3 mb-xl-0">Large add<code>.btn-lg</code>.</div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-lg btn-primary" type="button">Standard Button</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-lg btn-outline-secondary" type="button">Outline Button</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-lg btn-ghost-success" type="button">Ghost Button</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-lg btn-square btn-warning" type="button">Square Button</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-lg btn-pill btn-danger" type="button">Pill Button</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header"><strong>With Icons</strong></div>
                <div class="card-body">
                  <div class="row align-items-center mt-3">
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-primary" type="button">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lightbulb"></use>
                        </svg> Standard Button
                      </button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-outline-secondary" type="button">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lightbulb"></use>
                        </svg> Outline Button
                      </button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-ghost-success" type="button">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lightbulb"></use>
                        </svg> Ghost Button
                      </button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-square btn-warning" type="button">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lightbulb"></use>
                        </svg> Square Button
                      </button>
                    </div>
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                      <button class="btn btn-pill btn-danger" type="button">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lightbulb"></use>
                        </svg> Pill Button
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header"><strong>Block Level Buttons</strong></div>
                    <div class="card-body">
                      <p>Add this class<code>.btn-block</code></p>
                      <button class="btn btn-secondary btn-lg btn-block" type="button">Block level button</button>
                      <button class="btn btn-primary btn-lg btn-block" type="button">Block level button</button>
                      <button class="btn btn-success btn-lg btn-block" type="button">Block level button</button>
                      <button class="btn btn-info btn-lg btn-block" type="button">Block level button</button>
                      <button class="btn btn-warning btn-lg btn-block" type="button">Block level button</button>
                      <button class="btn btn-danger btn-lg btn-block" type="button">Block level button</button>
                      <button class="btn btn-link btn-lg btn-block" type="button">Block level button</button>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header"><strong>Block Level Buttons</strong></div>
                    <div class="card-body">
                      <p>Add this class<code>.btn-block</code></p>
                      <button class="btn btn-outline-secondary btn-lg btn-block" type="button">Block level button</button>
                      <button class="btn btn-outline-primary btn-lg btn-block" type="button">Block level button</button>
                      <button class="btn btn-outline-success btn-lg btn-block" type="button">Block level button</button>
                      <button class="btn btn-outline-info btn-lg btn-block" type="button">Block level button</button>
                      <button class="btn btn-outline-warning btn-lg btn-block" type="button">Block level button</button>
                      <button class="btn btn-outline-danger btn-lg btn-block" type="button">Block level button</button>
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