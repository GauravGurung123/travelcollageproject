<aside class="single_sidebar_widget search_widget">
    <form method="get" action="{{ route('search') }}">
        <div class="form-group">
            <div class="input-group mb-3">
                <input type="search" value="{{request()->input('search')}}" name="search" placeholder="Search Country"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Search Country'">
                <div class="input-group-append">
                    <button class="btn" type="button"><i class="ti-search"></i></button>
                </div>
            </div>
        </div>
        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
            type="submit">Search</button>
    </form>
</aside>
  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="search" value="{{request()->input('search')}}" name="search" placeholder="Search Country" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>
