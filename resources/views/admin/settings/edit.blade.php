@extends('admin.layouts.app')

@section('content')
    <section class="content">

        <!-- Basic Forms -->
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h6 class="box-subtitle text-white">Settings</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form method="POST" action="{{ route('admin.settings.update', $settings->id ) }}" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <h5>Site Name</h5>
                                <div class="controls">
                                    <input type="text" name="site_name" value="{{ $settings->site_name }}"
                                           class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Address</h5>
                                <div class="controls">
                                    <input type="text" name="site_address" class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Email</h5>
                                <div class="controls">
                                    <input type="email" name="site_email" value="{{ $settings->site_email }}"
                                           class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Phone Number</h5>
                                <div class="controls">
                                    <input type="text" name="site_phone_no" value="{{ $settings->site_phone_no }}"
                                           class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Facebook Link</h5>
                                <div class="controls">
                                    <input type="text" name="social_links[facebook]" value="{{ $settings->social_links?$user->social_links->facebook:'' }}"
                                           class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Twitter Link</h5>
                                <div class="controls">
                                    <input type="text" name="social_links[twitter]" value="{{ $settings->social_links?$user->social_links->twitter:'' }}"
                                           class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Instagram Link</h5>
                                <div class="controls">
                                    <input type="text" name="social_links[instagram]" value="{{ $settings->social_links?$user->social_links->instagram:'' }}"
                                           class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Youtube Link</h5>
                                <div class="controls">
                                    <input type="text" name="social_links[youtube]" value="{{ $settings->social_links?$user->social_links->youtube:'' }}"
                                           class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <h5>Logo</h5>
                                @if ( $settings->site_logo )
                                    <img src="{{ asset(Storage::url($settings->site_logo)) }}"
                                         style="height: 150px;  "/>
                                @endif
                                <div class="controls">
                                    <input type="file" name="site_logo" class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Favicon</h5>
                                @if ($settings->site_fav_icon)
                                    <img src="{{ asset(Storage::url($settings->site_fav_icon)) }}"
                                         style="height: 150px;  "/>
                                @endif
                                <div class="controls">
                                    <input type="file" name="site_fav_icon" class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Top content</h5>
                                <div class="controls">
                                <textarea name="site_top_content" class="form-control" aria-invalid="false">{{ $settings->site_top_content }}</textarea>
                                <div class="help-block"></div></div>
                            </div>
                            <div class="form-group">
                                <h5>Middle content</h5>
                                <div class="controls">
                                    <textarea name="site_middle_content" class="form-control" aria-invalid="false">{{ $settings->site_middle_content }}</textarea>
                                <div class="help-block"></div></div>
                            </div>
                            <div class="form-group">
                                <h5>Bottom content</h5>
                                <div class="controls">
                                    <textarea name="site_bottom_content" class="form-control" aria-invalid="false">{{ $settings->site_bottom_content }}</textarea>
                                <div class="help-block"></div></div>
                            </div>

                            

                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-info">Save Settings</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
@endsection
@push('scripts')

@endpush
