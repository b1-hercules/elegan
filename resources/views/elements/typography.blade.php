@extends('layouts.template')
@section('content')
<div class="page-header">
  <h1 class="page-title font_lato">Typography</h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/dashboard')}}">{{ trans('app.home')}}</a></li>
		<li class="active">Typography</li>
	</ol>
  </div>
</div> 
  <div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Headings -->
              <div class="example-wrap">
                <h4 class="example-title">Headings</h4>
                <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>,
                  are available. <code>.h1</code> through <code>.h6</code> classes
                  are also available, for when you want to match the font styling
                  of a heading but still want your text to be displayed inline.</p>
                <div class="example">
                  <h1>h1. Bootstrap heading</h1>
                  <h2>h2. Bootstrap heading</h2>
                  <h3>h3. Bootstrap heading</h3>
                  <h4>h4. Bootstrap heading</h4>
                  <h5>h5. Bootstrap heading</h5>
                  <h6>h6. Bootstrap heading</h6>
                </div>
              </div>
              <!-- End Example Headings -->
            </div>
            <div class="col-lg-6">
              <!-- Example Styled Headings -->
              <div class="example-wrap">
                <h4 class="example-title">Styled Headings</h4>
                <p>Create lighter, secondary text in any heading with a generic
                  <code>&lt;small&gt;</code> tag or the <code>.small</code> class.</p>
                <div class="example">
                  <h1><i class="icon wb-book" aria-hidden="true"></i>Bootstrap heading
                    <small>Secondary text</small>
                  </h1>
                  <h2><i class="icon wb-book" aria-hidden="true"></i>Bootstrap heading
                    <small>Secondary text</small>
                  </h2>
                  <h3><i class="icon wb-book" aria-hidden="true"></i>Bootstrap heading
                    <small>Secondary text</small>
                  </h3>
                  <h4><i class="icon wb-book" aria-hidden="true"></i>Bootstrap heading
                    <small>Secondary text</small>
                  </h4>
                  <h5><i class="icon wb-book" aria-hidden="true"></i>Bootstrap heading
                    <small>Secondary text</small>
                  </h5>
                  <h6><i class="icon wb-book" aria-hidden="true"></i>Bootstrap heading
                    <small>Secondary text</small>
                  </h6>
                </div>
              </div>
              <!-- End Example Styled Headings -->
            </div>
          </div>
          <div class="row row-lg">
            <div class="col-lg-4 col-sm-6">
              <!-- Example Body Copy -->
              <div class="example-wrap">
                <h4 class="example-title">Body Copy</h4>
                <p>Bootstrap's global default <code>font-size</code> is
                  <strong>14px</strong>, with a <code>line-height</code> of
                  <strong>1.428</strong>. This is applied to the <code>&lt;body&gt;</code>                  and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs)
                  receive a bottom margin of half their computed line-height (10px
                  by default).</p>
              </div>
              <!-- End Example Body Copy -->
            </div>
            <div class="col-lg-4 col-sm-6">
              <!-- Example Highlight -->
              <div class="example-wrap">
                <h4 class="example-title">Highlight</h4>
                <p>For highlighting a run of text due to its relevance in another
                  context, use the <code>&lt;mark&gt;</code> tag. Like this:</p>
                <p>You can use the mark tag to
                  <mark>highlight</mark> text.</p>
              </div>
              <!-- End Example Highlight -->
            </div>
            <div class="clearfix visible-md-block visible-sm-block"></div>
            <div class="col-lg-4 col-sm-6">
              <!-- Example Addresses -->
              <div class="example-wrap">
                <h4 class="example-title">Addresses</h4>
                <p>Present contact information for the nearest ancestor or the entire
                  body of work. Preserve formatting by ending all lines with
                  <code>&lt;br&gt;</code>.</p>
                <address>
                  <strong>Twitter, Inc.</strong>
                  <br> 795 Folsom Ave, Suite 600
                  <br> San Francisco, CA 94107
                  <br>
                  <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
                <address>
                  <strong>Full Name</strong>
                  <br>
                  <a href="mailto:#">first.last@example.com</a>
                </address>
              </div>
              <!-- End Example Addresses -->
            </div>
            <div class="col-lg-4 col-sm-6">
              <!-- Example Lists - Unordered -->
              <div class="example-wrap">
                <h4 class="example-title">Lists - Unordered</h4>
                <p>A list of items in which the order does not explicitly matter.</p>
                <ul>
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Nulla volutpat aliquam velit
                    <ul>
                      <li>Phasellus iaculis neque</li>
                      <li>Purus sodales ultricies</li>
                      <li>Vestibulum laoreet porttitor sem</li>
                    </ul>
                  </li>
                  <li>Faucibus porta lacus fringilla vel</li>
                  <li>Aenean sit amet erat nunc</li>
                  <li>Eget porttitor lorem</li>
                </ul>
              </div>
              <!-- End Example Lists - Unordered -->
            </div>
            <div class="clearfix visible-md-block visible-sm-block"></div>
            <div class="col-lg-4 col-sm-6">
              <!-- Example Lists - Ordered -->
              <div class="example-wrap">
                <h4 class="example-title">Lists - Ordered</h4>
                <p>A list of items in which the order does explicitly matter.</p>
                <ol>
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Nulla volutpat aliquam velit
                    <ol>
                      <li>Phasellus iaculis neque</li>
                      <li>Purus sodales ultricies</li>
                      <li>Vestibulum laoreet porttitor sem</li>
                    </ol>
                  </li>
                  <li>Faucibus porta lacus fringilla vel</li>
                  <li>Aenean sit amet erat nunc</li>
                  <li>Eget porttitor lorem</li>
                </ol>
              </div>
              <!-- End Example Lists - Ordered -->
            </div>
            <div class="col-lg-4 col-sm-6">
              <!-- Example Lists - Unstyled -->
              <div class="example-wrap">
                <h4 class="example-title">Lists - Unstyled</h4>
                <p>Remove the default <code>list-style</code> and left margin on list
                  items (immediate children only).
                  <strong>This only applies to immediate children list items</strong>,
                  meaning you will need to add the class for any nested lists as
                  well.</p>
                <ul class="list-unstyled">
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Nulla volutpat aliquam velit
                    <ul>
                      <li>Phasellus iaculis neque</li>
                      <li>Purus sodales ultricies</li>
                      <li>Vestibulum laoreet porttitor sem</li>
                    </ul>
                  </li>
                  <li>Faucibus porta lacus fringilla vel</li>
                  <li>Aenean sit amet erat nunc</li>
                  <li>Eget porttitor lorem</li>
                </ul>
              </div>
              <!-- End Example Lists - Unstyled -->
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-4 col-sm-6">
              <!-- Example Lists - Icons -->
              <div class="example-wrap">
                <h4 class="example-title">Lists - Icons</h4>
                <p>A list of terms with icons.</p>
                <ul class="list-icons">
                  <li><i class="wb-check" aria-hidden="true"></i>Lorem ipsum dolor
                    sit amet</li>
                  <li><i class="wb-check" aria-hidden="true"></i>Nulla volutpat aliquam
                    velit
                    <ul>
                      <li>Phasellus iaculis neque</li>
                      <li>Purus sodales ultricies</li>
                    </ul>
                  </li>
                  <li><i class="wb-check" aria-hidden="true"></i>Faucibus porta lacus
                    fringilla vel</li>
                </ul>
              </div>
              <!-- End Example Lists - Icons -->
            </div>
            <div class="col-lg-4 col-sm-6">
              <!-- Example Collapsible Submenu -->
              <div class="example-wrap">
                <h4 class="example-title">Collapsible Submenu</h4>
                <p>A list of terms with icons.</p>
                <ul class="list-icons">
                  <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>Lorem
                    ipsum dolor sit amet</li>
                  <li><a data-toggle="collapse" href="#exampleSubmenu" aria-controls="exampleSubmenu"
                    aria-expanded="true"><i class="wb-chevron-right-mini" aria-hidden="true"></i>Nulla volutpat aliquam velit</a>
                    <ul class="collapse in" id="exampleSubmenu">
                      <li>Phasellus iaculis neque</li>
                      <li>Purus sodales ultricies</li>
                    </ul>
                  </li>
                  <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>Faucibus
                    porta lacus fringilla vel</li>
                </ul>
              </div>
              <!-- End Example Collapsible Submenu -->
            </div>
            <div class="col-lg-4 col-sm-6">
              <!-- Example Lists - Inline -->
              <div class="example-wrap">
                <h4 class="example-title">Lists - Inline</h4>
                <p>Place all list items on a single line with <code>display: inline-block;</code>                  and some light padding.</p>
                <ul class="list-inline">
                  <li>Lorem ipsum</li>
                  <li>Phasellus iaculis</li>
                  <li>Nulla volutpat</li>
                </ul>
              </div>
              <!-- End Example Lists - Inline -->
            </div>
            <div class="clearfix visible-lg-block"></div>
            <div class="col-lg-4 col-sm-6">
              <!-- Example Description -->
              <div class="example-wrap">
                <h4 class="example-title">Description</h4>
                <p>A list of terms with their associated descriptions.</p>
                <dl>
                  <dt>Description lists</dt>
                  <dd>A description list is perfect for defining terms.</dd>
                  <dt>Euismod</dt>
                  <dd>Vestibulum id ligula porta felis euismod semper eget lacinia
                    odio.
                  </dd>
                  <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                  <dt>Malesuada porta</dt>
                  <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                </dl>
              </div>
              <!-- End Example Description -->
            </div>
            <div class="clearfix visible-md-block"></div>
            <div class="col-lg-8">
              <!-- Example Horizontal Description -->
              <div class="example-wrap">
                <h4 class="example-title">Horizontal Description</h4>
                <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up
                  side-by-side. Starts off stacked like default <code>&lt;dl&gt;</code>s,
                  but when the navbar expands, so do these.</p>
                <dl class="dl-horizontal">
                  <dt>Description lists</dt>
                  <dd>A description list is perfect for defining terms.</dd>
                  <dt>Euismod</dt>
                  <dd>Vestibulum id ligula porta felis euismod semper eget lacinia
                    odio sem nec elit.</dd>
                  <dd>Donec id elit non mi porta gravida.</dd>
                  <dt>Malesuada porta</dt>
                  <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                  <dt>Qui eiusmod magna.</dt>
                  <dd>Lorem ipsum In enim nostrud ut in mollit sint cillum laborum
                    ea quis qui.</dd>
                </dl>
              </div>
              <!-- End Example Horizontal Description -->
            </div>
          </div>
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Well -->
              <div class="example-wrap margin-lg-0">
                <h4 class="example-title">Well</h4>
                <p>Use the well as a simple effect on an element to give it an inset
                  effect.
                </p>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="well well-sm">Look, I'm in a small well!</div>
                    <div class="well">Look, I'm in a well!</div>
                    <div class="well well-lg">Look, I'm in a large well!</div>
                  </div>
                  <div class="col-sm-6">
                    <div class="well well-sm well-primary">bg-primary well</div>
                    <div class="well well-sm well-success">bg-success well</div>
                    <div class="well well-sm well-info">bg-info well</div>
                    <div class="well well-sm well-warning">bg-warning well</div>
                    <div class="well well-sm well-danger">bg-danger well</div>
                  </div>
                </div>
              </div>
              <!-- End Example Well -->
            </div>
            <div class="col-lg-6">
              <!-- Example Drop Cap -->
              <div class="example-wrap">
                <h4 class="example-title">Drop Cap</h4>
                <p>Use the class <code>.drop-cap</code> let the first letter drop
                  down of content texts.</p>
                <p>
                  <span class="drop-cap">L</span>ed cursus ante dapibus diam. Sed nisi. Nulla quis sem
                  at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.
                  Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum
                  lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora
                  torquent per conubia nostra, per inceptos himenaeos. Curabitur
                  sodales ligula in libero. Sed dignissim lacinia nunc.sed cursus
                  ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum
                  imperdiet.</p>
                <p>
                  <span class="drop-cap drop-cap-reversed">L</span>ed cursus ante dapibus diam. Sed nisi. Nulla quis sem
                  at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.
                  Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum
                  lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora
                  torquent per conubia nostra, per inceptos himenaeos. Curabitur
                  sodales ligula in libero. Sed dignissim lacinia nunc.sed cursus
                  ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum
                  imperdiet.</p>
              </div>
              <!-- End Example Drop Cap -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel -->
    </div>
<br/>

@stop