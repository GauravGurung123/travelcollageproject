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
                        <form method="POST" action="{{ route('admin.settings.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <h5>Site Name</h5>
                                <div class="controls">
                                    <input type="text" name="site_name" value="{{ setting($settings, 'site_name') }}"
                                           class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Email</h5>
                                <div class="controls">
                                    <input type="email" name="email" value="{{ setting($settings, 'email') }}"
                                           class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Phone Number</h5>
                                <div class="controls">
                                    <input type="text" name="phone_no" value="{{ setting($settings, 'phone_no') }}"
                                           class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Facebook Link</h5>
                                <div class="controls">
                                    <input type="text" name="facebook" value="{{ setting($settings, 'facebook') }}"
                                           class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Twitter Link</h5>
                                <div class="controls">
                                    <input type="text" name="twitter" value="{{ setting($settings, 'twitter') }}"
                                           class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Instagram Link</h5>
                                <div class="controls">
                                    <input type="text" name="instagram" value="{{ setting($settings, 'instagram') }}"
                                           class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Youtube Link</h5>
                                <div class="controls">
                                    <input type="text" name="youtube" value="{{ setting($settings, 'youtube') }}"
                                           class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Google Analytics</h5>
                                <div class="controls">
                                    <textarea name="google_analytics" class="form-control" aria-invalid="false">{{ setting($settings, 'google_analytics') }}</textarea>
                                <div class="help-block"></div></div>
                            </div>
                            <div class="form-group">
                                <h5>Facebook Pixel Add</h5>
                                <div class="controls">
                                    <textarea name="facebook_Pixel" class="form-control" aria-invalid="false">{{ setting($settings, 'facebook_Pixel') }}</textarea>
                                <div class="help-block"></div></div>
                            </div>
                            <div class="form-group">
                                <h5>Logo</h5>
                                @if ( setting($settings, 'logo'))
                                    <img src="{{ asset(Storage::url(setting($settings, 'logo'))) }}"
                                         style="height: 150px;  "/>
                                @endif
                                <div class="controls">
                                    <input type="file" name="logo" class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Favicon</h5>
                                @if ( setting($settings, 'favicon'))
                                    <img src="{{ asset(Storage::url(setting($settings, 'favicon'))) }}"
                                         style="height: 150px;  "/>
                                @endif
                                <div class="controls">
                                    <input type="file" name="favicon" class="form-control">
                                    <div class="help-block"></div>
                                </div>
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
