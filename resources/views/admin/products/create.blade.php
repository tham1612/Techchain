@extends('admin.layouts.master')
@section('title')
    Danh sach san pham
@endsection
@section('content')
    <!-- start page title -->
    <form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Them moi </h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">san pham </a></li>
                            <li class="breadcrumb-item active">them moi</li>
                        </ol>
                    </div>


                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Thông tin</h4>

                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row ">
                                <div class="col-xxl-3 col-md-4">
                                    <div>
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="mt-3">
                                        <label for="name" class="form-label">SKU</label>
                                        <input type="text" class="form-control" id="name" name="sku"
                                               value="{{Strtoupper(\Illuminate\Support\Str::random(8))}}">
                                    </div>
                                    <div class="mt-3">
                                        <label for="price_regular" class="form-label">PRICE REGULAR</label>
                                        <input type="number" value="0" class="form-control" id="price_regular"
                                               name="price_regular">
                                    </div>
                                    <div class="mt-3">
                                        <label for="price_sale" class="form-label">PRICE REGULAR</label>
                                        <input type="number" value="0" class="form-control" id="price_sale"
                                               name="price_sale">
                                    </div>
                                    <div class="mt-3">
                                        <label for="name" class="form-label">Catelogues</label>

                                        <select name="catelogue_id" class="form-select" id="">
                                            <option>-----Lựa chọn-------</option>
                                            @foreach($catelogues as $id=>$name)
                                                <option value="{{$id}}">{{$name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <label for="img_thumbnail" class="form-label">IMG_THUMB</label>
                                        <input type="file" class="form-control" id="img_thumbnail" name="img_thumbnail">
                                    </div>

                                </div>
                                <div class=" col-md-8">
                                    <div class="row  ">
                                        <!-- Custom Checkboxes Color -->
                                        <div class="col-md-2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                       id="is_active"
                                                       checked>
                                                <label class="form-check-label" for="is_active">is_Active</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check form-switch form-switch-secondary">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                       id="is_hot_deal" checked>
                                                <label class="form-check-label" for="is_hot_deal">is_Hot_Deal</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check form-switch form-switch-success">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                       id="is_good_deal" checked>
                                                <label class="form-check-label" for="is_good_deal">is_Good_Deal</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check form-switch form-switch-warning">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                       id="is_new"
                                                       checked>
                                                <label class="form-check-label" for="is_new">is_New</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check form-switch form-switch-danger">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                       id="is_show_home" checked>
                                                <label class="form-check-label" for="is_show_home">is_Show_Home</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <!-- Example Textarea -->
                                        <div class="mt-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" name="description"
                                                      rows="2"></textarea>
                                        </div>
                                        <div class="mt-3">
                                            <label for="material" class="form-label">Material</label>
                                            <textarea class="form-control" id="material" name="material"
                                                      rows="2"></textarea>
                                        </div>
                                        <div class="mt-3">
                                            <label for="user_maual" class="form-label">User_maual</label>
                                            <textarea class="form-control" id="user_maual" name="user_maual"
                                                      rows="2"></textarea>
                                        </div>
                                        <div class="mt-3">
                                            <label for="content" class="form-label">Content</label>
                                            <textarea name="content" id="content"></textarea>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!--end row-->
                        </div>
                        <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 450px;"><code>&lt;!-- Basic Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;basiInput&quot; class=&quot;form-label&quot;&gt;Basic Input&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;basiInput&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Label --&gt;
&lt;div&gt;
    &lt;label for=&quot;labelInput&quot; class=&quot;form-label&quot;&gt;Input with Label&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;labelInput&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Placeholder --&gt;
&lt;div&gt;
    &lt;label for=&quot;placeholderInput&quot; class=&quot;form-label&quot;&gt;Input with Placeholder&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;placeholderInput&quot; placeholder=&quot;Placeholder&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Value --&gt;
&lt;div&gt;
    &lt;label for=&quot;valueInput&quot; class=&quot;form-label&quot;&gt;Input with Value&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;valueInput&quot; value=&quot;Input value&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Readonly Plain Text Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;readonlyPlaintext&quot; class=&quot;form-label&quot;&gt;Readonly Plain Text Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control-plaintext&quot; id=&quot;readonlyPlaintext&quot; value=&quot;Readonly input&quot; readonly&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Readonly Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;readonlyInput&quot; class=&quot;form-label&quot;&gt;Readonly Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;readonlyInput&quot; value=&quot;Readonly input&quot; readonly&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Disabled Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;disabledInput&quot; class=&quot;form-label&quot;&gt;Disabled Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;disabledInput&quot; value=&quot;Disabled input&quot; disabled&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Icon --&gt;
&lt;div&gt;
    &lt;label for=&quot;iconInput&quot; class=&quot;form-label&quot;&gt;Input with Icon&lt;/label&gt;
    &lt;div class=&quot;form-icon&quot;&gt;
        &lt;input type=&quot;email&quot; class=&quot;form-control form-control-icon&quot; id=&quot;iconInput&quot; placeholder=&quot;example@gmail.com&quot;&gt;
        &lt;i class=&quot;ri-mail-unread-line&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Icon Right --&gt;
&lt;div&gt;
    &lt;label for=&quot;iconrightInput&quot; class=&quot;form-label&quot;&gt;Input with Icon Right&lt;/label&gt;
    &lt;div class=&quot;form-icon right&quot;&gt;
        &lt;input type=&quot;email&quot; class=&quot;form-control form-control-icon&quot; id=&quot;iconrightInput&quot; placeholder=&quot;example@gmail.com&quot;&gt;
        &lt;i class=&quot;ri-mail-unread-line&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Date --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputdate&quot; class=&quot;form-label&quot;&gt;Input Date&lt;/label&gt;
    &lt;input type=&quot;date&quot; class=&quot;form-control&quot; id=&quot;exampleInputdate&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Time --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputtime&quot; class=&quot;form-label&quot;&gt;Input Time&lt;/label&gt;
    &lt;input type=&quot;time&quot; class=&quot;form-control&quot; id=&quot;exampleInputtime&quot; value=&quot;08:56 AM&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Password --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputpassword&quot; class=&quot;form-label&quot;&gt;Input Password&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputpassword&quot; value=&quot;44512465&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Example Textarea --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleFormControlTextarea5&quot; class=&quot;form-label&quot;&gt;Example Textarea&lt;/label&gt;
    &lt;textarea class=&quot;form-control&quot; id=&quot;exampleFormControlTextarea5&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Form Text --&gt;
&lt;div&gt;
    &lt;label for=&quot;formtextInput&quot; class=&quot;form-label&quot;&gt;Form Text&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;formtextInput&quot;&gt;
    &lt;div id=&quot;passwordHelpBlock&quot; class=&quot;form-text&quot;&gt;
        Must be 8-20 characters long.
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Color Picker --&gt;
&lt;div&gt;
    &lt;label for=&quot;colorPicker&quot; class=&quot;form-label&quot;&gt;Color Picker&lt;/label&gt;
    &lt;input type=&quot;color&quot; class=&quot;form-control form-control-color w-100&quot; id=&quot;colorPicker&quot; value=&quot;#364574&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Border Style --&gt;
&lt;div&gt;
    &lt;label for=&quot;borderInput&quot; class=&quot;form-label&quot;&gt;Input Border Style&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control border-dashed&quot; id=&quot;borderInput&quot; placeholder=&quot;Enter your name&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Datalist example --&gt;
&lt;label for=&quot;exampleDataList&quot; class=&quot;form-label&quot;&gt;Datalist example&lt;/label&gt;
&lt;input class=&quot;form-control&quot; list=&quot;datalistOptions&quot; id=&quot;exampleDataList&quot; placeholder=&quot;Search your country...&quot;&gt;
&lt;datalist id=&quot;datalistOptions&quot;&gt;
    &lt;option value=&quot;Switzerland&quot;&gt;
    &lt;option value=&quot;New York&quot;&gt;
    &lt;option value=&quot;France&quot;&gt;
    &lt;option value=&quot;Spain&quot;&gt;
    &lt;option value=&quot;Chicago&quot;&gt;
    &lt;option value=&quot;Bulgaria&quot;&gt;
    &lt;option value=&quot;Hong Kong&quot;&gt;
&lt;/datalist&gt;</code>

<code>&lt;!-- Rounded Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputrounded&quot; class=&quot;form-label&quot;&gt;Rounded Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control rounded-pill&quot; id=&quot;exampleInputrounded&quot; placeholder=&quot;Enter your name&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Floating Input --&gt;
&lt;div class=&quot;form-floating&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;firstnamefloatingInput&quot; placeholder=&quot;Enter your firstname&quot;&gt;
    &lt;label for=&quot;firstnamefloatingInput&quot;&gt;Floating Input&lt;/label&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <div class="row" style="height: 300px; overflow: scroll;">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Bien the</h4>

                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row  ">
                                <div class="">

                                    <table>
                                        <th>Size</th>
                                        <th>Color</th>
                                        <th>Quantiry</th>

                                        <th>Image</th>
                                        @foreach($sizes as $sizeID =>$sizeName)
                                            @foreach($colors as $colorID=> $colorName)
                                                <tr>
                                                    <th>{{$sizeName}}</th>
                                                    <th>
                                                        <div class=""
                                                             style="width: 50px;height: 50px; background:{{$colorName}} ;"></div>
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" value="100"
                                                               name="product_variants[{{ $sizeID . '-' . $colorID }}][quantity]">
                                                    </th>

                                                    <th>
                                                        <input type="file" class="form-control"
                                                               name="product_variants[{{$sizeID . '-'. $colorID}}][image]">
                                                    </th>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </table>


                                </div>

                            </div>
                            <!--end row-->
                        </div>
                        <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 450px;"><code>&lt;!-- Basic Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;basiInput&quot; class=&quot;form-label&quot;&gt;Basic Input&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;basiInput&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Label --&gt;
&lt;div&gt;
    &lt;label for=&quot;labelInput&quot; class=&quot;form-label&quot;&gt;Input with Label&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;labelInput&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Placeholder --&gt;
&lt;div&gt;
    &lt;label for=&quot;placeholderInput&quot; class=&quot;form-label&quot;&gt;Input with Placeholder&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;placeholderInput&quot; placeholder=&quot;Placeholder&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Value --&gt;
&lt;div&gt;
    &lt;label for=&quot;valueInput&quot; class=&quot;form-label&quot;&gt;Input with Value&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;valueInput&quot; value=&quot;Input value&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Readonly Plain Text Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;readonlyPlaintext&quot; class=&quot;form-label&quot;&gt;Readonly Plain Text Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control-plaintext&quot; id=&quot;readonlyPlaintext&quot; value=&quot;Readonly input&quot; readonly&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Readonly Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;readonlyInput&quot; class=&quot;form-label&quot;&gt;Readonly Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;readonlyInput&quot; value=&quot;Readonly input&quot; readonly&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Disabled Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;disabledInput&quot; class=&quot;form-label&quot;&gt;Disabled Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;disabledInput&quot; value=&quot;Disabled input&quot; disabled&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Icon --&gt;
&lt;div&gt;
    &lt;label for=&quot;iconInput&quot; class=&quot;form-label&quot;&gt;Input with Icon&lt;/label&gt;
    &lt;div class=&quot;form-icon&quot;&gt;
        &lt;input type=&quot;email&quot; class=&quot;form-control form-control-icon&quot; id=&quot;iconInput&quot; placeholder=&quot;example@gmail.com&quot;&gt;
        &lt;i class=&quot;ri-mail-unread-line&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Icon Right --&gt;
&lt;div&gt;
    &lt;label for=&quot;iconrightInput&quot; class=&quot;form-label&quot;&gt;Input with Icon Right&lt;/label&gt;
    &lt;div class=&quot;form-icon right&quot;&gt;
        &lt;input type=&quot;email&quot; class=&quot;form-control form-control-icon&quot; id=&quot;iconrightInput&quot; placeholder=&quot;example@gmail.com&quot;&gt;
        &lt;i class=&quot;ri-mail-unread-line&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Date --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputdate&quot; class=&quot;form-label&quot;&gt;Input Date&lt;/label&gt;
    &lt;input type=&quot;date&quot; class=&quot;form-control&quot; id=&quot;exampleInputdate&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Time --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputtime&quot; class=&quot;form-label&quot;&gt;Input Time&lt;/label&gt;
    &lt;input type=&quot;time&quot; class=&quot;form-control&quot; id=&quot;exampleInputtime&quot; value=&quot;08:56 AM&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Password --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputpassword&quot; class=&quot;form-label&quot;&gt;Input Password&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputpassword&quot; value=&quot;44512465&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Example Textarea --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleFormControlTextarea5&quot; class=&quot;form-label&quot;&gt;Example Textarea&lt;/label&gt;
    &lt;textarea class=&quot;form-control&quot; id=&quot;exampleFormControlTextarea5&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Form Text --&gt;
&lt;div&gt;
    &lt;label for=&quot;formtextInput&quot; class=&quot;form-label&quot;&gt;Form Text&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;formtextInput&quot;&gt;
    &lt;div id=&quot;passwordHelpBlock&quot; class=&quot;form-text&quot;&gt;
        Must be 8-20 characters long.
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Color Picker --&gt;
&lt;div&gt;
    &lt;label for=&quot;colorPicker&quot; class=&quot;form-label&quot;&gt;Color Picker&lt;/label&gt;
    &lt;input type=&quot;color&quot; class=&quot;form-control form-control-color w-100&quot; id=&quot;colorPicker&quot; value=&quot;#364574&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Border Style --&gt;
&lt;div&gt;
    &lt;label for=&quot;borderInput&quot; class=&quot;form-label&quot;&gt;Input Border Style&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control border-dashed&quot; id=&quot;borderInput&quot; placeholder=&quot;Enter your name&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Datalist example --&gt;
&lt;label for=&quot;exampleDataList&quot; class=&quot;form-label&quot;&gt;Datalist example&lt;/label&gt;
&lt;input class=&quot;form-control&quot; list=&quot;datalistOptions&quot; id=&quot;exampleDataList&quot; placeholder=&quot;Search your country...&quot;&gt;
&lt;datalist id=&quot;datalistOptions&quot;&gt;
    &lt;option value=&quot;Switzerland&quot;&gt;
    &lt;option value=&quot;New York&quot;&gt;
    &lt;option value=&quot;France&quot;&gt;
    &lt;option value=&quot;Spain&quot;&gt;
    &lt;option value=&quot;Chicago&quot;&gt;
    &lt;option value=&quot;Bulgaria&quot;&gt;
    &lt;option value=&quot;Hong Kong&quot;&gt;
&lt;/datalist&gt;</code>

<code>&lt;!-- Rounded Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputrounded&quot; class=&quot;form-label&quot;&gt;Rounded Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control rounded-pill&quot; id=&quot;exampleInputrounded&quot; placeholder=&quot;Enter your name&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Floating Input --&gt;
&lt;div class=&quot;form-floating&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;firstnamefloatingInput&quot; placeholder=&quot;Enter your firstname&quot;&gt;
    &lt;label for=&quot;firstnamefloatingInput&quot;&gt;Floating Input&lt;/label&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Gallery</h4>

                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row ">
                                <div class="col-xxl-3 col-md-4">
                                    <div>
                                        <label for="product_gallery_1" class="form-label">Gallery_1</label>
                                        <input type="file" class="form-control" id="product_gallery_[]"
                                               name="product_gallery_1">
                                    </div>


                                </div>
                                <div class="col-xxl-3 col-md-4">
                                    <div>
                                        <label for="product_gallery_2" class="form-label">Gallery_2</label>
                                        <input type="file" class="form-control" id="product_gallery_[]"
                                               name="product_gallery_2">
                                    </div>


                                </div>

                            </div>
                            <!--end row-->
                        </div>
                        <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 450px;"><code>&lt;!-- Basic Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;basiInput&quot; class=&quot;form-label&quot;&gt;Basic Input&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;basiInput&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Label --&gt;
&lt;div&gt;
    &lt;label for=&quot;labelInput&quot; class=&quot;form-label&quot;&gt;Input with Label&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;labelInput&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Placeholder --&gt;
&lt;div&gt;
    &lt;label for=&quot;placeholderInput&quot; class=&quot;form-label&quot;&gt;Input with Placeholder&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;placeholderInput&quot; placeholder=&quot;Placeholder&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Value --&gt;
&lt;div&gt;
    &lt;label for=&quot;valueInput&quot; class=&quot;form-label&quot;&gt;Input with Value&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;valueInput&quot; value=&quot;Input value&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Readonly Plain Text Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;readonlyPlaintext&quot; class=&quot;form-label&quot;&gt;Readonly Plain Text Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control-plaintext&quot; id=&quot;readonlyPlaintext&quot; value=&quot;Readonly input&quot; readonly&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Readonly Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;readonlyInput&quot; class=&quot;form-label&quot;&gt;Readonly Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;readonlyInput&quot; value=&quot;Readonly input&quot; readonly&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Disabled Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;disabledInput&quot; class=&quot;form-label&quot;&gt;Disabled Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;disabledInput&quot; value=&quot;Disabled input&quot; disabled&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Icon --&gt;
&lt;div&gt;
    &lt;label for=&quot;iconInput&quot; class=&quot;form-label&quot;&gt;Input with Icon&lt;/label&gt;
    &lt;div class=&quot;form-icon&quot;&gt;
        &lt;input type=&quot;email&quot; class=&quot;form-control form-control-icon&quot; id=&quot;iconInput&quot; placeholder=&quot;example@gmail.com&quot;&gt;
        &lt;i class=&quot;ri-mail-unread-line&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Icon Right --&gt;
&lt;div&gt;
    &lt;label for=&quot;iconrightInput&quot; class=&quot;form-label&quot;&gt;Input with Icon Right&lt;/label&gt;
    &lt;div class=&quot;form-icon right&quot;&gt;
        &lt;input type=&quot;email&quot; class=&quot;form-control form-control-icon&quot; id=&quot;iconrightInput&quot; placeholder=&quot;example@gmail.com&quot;&gt;
        &lt;i class=&quot;ri-mail-unread-line&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Date --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputdate&quot; class=&quot;form-label&quot;&gt;Input Date&lt;/label&gt;
    &lt;input type=&quot;date&quot; class=&quot;form-control&quot; id=&quot;exampleInputdate&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Time --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputtime&quot; class=&quot;form-label&quot;&gt;Input Time&lt;/label&gt;
    &lt;input type=&quot;time&quot; class=&quot;form-control&quot; id=&quot;exampleInputtime&quot; value=&quot;08:56 AM&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Password --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputpassword&quot; class=&quot;form-label&quot;&gt;Input Password&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputpassword&quot; value=&quot;44512465&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Example Textarea --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleFormControlTextarea5&quot; class=&quot;form-label&quot;&gt;Example Textarea&lt;/label&gt;
    &lt;textarea class=&quot;form-control&quot; id=&quot;exampleFormControlTextarea5&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Form Text --&gt;
&lt;div&gt;
    &lt;label for=&quot;formtextInput&quot; class=&quot;form-label&quot;&gt;Form Text&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;formtextInput&quot;&gt;
    &lt;div id=&quot;passwordHelpBlock&quot; class=&quot;form-text&quot;&gt;
        Must be 8-20 characters long.
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Color Picker --&gt;
&lt;div&gt;
    &lt;label for=&quot;colorPicker&quot; class=&quot;form-label&quot;&gt;Color Picker&lt;/label&gt;
    &lt;input type=&quot;color&quot; class=&quot;form-control form-control-color w-100&quot; id=&quot;colorPicker&quot; value=&quot;#364574&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Border Style --&gt;
&lt;div&gt;
    &lt;label for=&quot;borderInput&quot; class=&quot;form-label&quot;&gt;Input Border Style&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control border-dashed&quot; id=&quot;borderInput&quot; placeholder=&quot;Enter your name&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Datalist example --&gt;
&lt;label for=&quot;exampleDataList&quot; class=&quot;form-label&quot;&gt;Datalist example&lt;/label&gt;
&lt;input class=&quot;form-control&quot; list=&quot;datalistOptions&quot; id=&quot;exampleDataList&quot; placeholder=&quot;Search your country...&quot;&gt;
&lt;datalist id=&quot;datalistOptions&quot;&gt;
    &lt;option value=&quot;Switzerland&quot;&gt;
    &lt;option value=&quot;New York&quot;&gt;
    &lt;option value=&quot;France&quot;&gt;
    &lt;option value=&quot;Spain&quot;&gt;
    &lt;option value=&quot;Chicago&quot;&gt;
    &lt;option value=&quot;Bulgaria&quot;&gt;
    &lt;option value=&quot;Hong Kong&quot;&gt;
&lt;/datalist&gt;</code>

<code>&lt;!-- Rounded Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputrounded&quot; class=&quot;form-label&quot;&gt;Rounded Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control rounded-pill&quot; id=&quot;exampleInputrounded&quot; placeholder=&quot;Enter your name&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Floating Input --&gt;
&lt;div class=&quot;form-floating&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;firstnamefloatingInput&quot; placeholder=&quot;Enter your firstname&quot;&gt;
    &lt;label for=&quot;firstnamefloatingInput&quot;&gt;Floating Input&lt;/label&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Tag</h4>

                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row ">
                                <div class="col-md-12">
                                    <div>
                                        <label for="product_gallery_1" class="form-label">Tags</label>
                                        <select type="text" class="form-control" id="tags[]" name="tags" multiple>
                                            @foreach($tags as $id=>$name)
                                                <option value="{{$id}}">{{$name}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>


                            </div>
                            <!--end row-->
                        </div>
                        <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 450px;"><code>&lt;!-- Basic Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;basiInput&quot; class=&quot;form-label&quot;&gt;Basic Input&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;basiInput&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Label --&gt;
&lt;div&gt;
    &lt;label for=&quot;labelInput&quot; class=&quot;form-label&quot;&gt;Input with Label&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;labelInput&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Placeholder --&gt;
&lt;div&gt;
    &lt;label for=&quot;placeholderInput&quot; class=&quot;form-label&quot;&gt;Input with Placeholder&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;placeholderInput&quot; placeholder=&quot;Placeholder&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Value --&gt;
&lt;div&gt;
    &lt;label for=&quot;valueInput&quot; class=&quot;form-label&quot;&gt;Input with Value&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;valueInput&quot; value=&quot;Input value&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Readonly Plain Text Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;readonlyPlaintext&quot; class=&quot;form-label&quot;&gt;Readonly Plain Text Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control-plaintext&quot; id=&quot;readonlyPlaintext&quot; value=&quot;Readonly input&quot; readonly&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Readonly Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;readonlyInput&quot; class=&quot;form-label&quot;&gt;Readonly Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;readonlyInput&quot; value=&quot;Readonly input&quot; readonly&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Disabled Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;disabledInput&quot; class=&quot;form-label&quot;&gt;Disabled Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;disabledInput&quot; value=&quot;Disabled input&quot; disabled&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Icon --&gt;
&lt;div&gt;
    &lt;label for=&quot;iconInput&quot; class=&quot;form-label&quot;&gt;Input with Icon&lt;/label&gt;
    &lt;div class=&quot;form-icon&quot;&gt;
        &lt;input type=&quot;email&quot; class=&quot;form-control form-control-icon&quot; id=&quot;iconInput&quot; placeholder=&quot;example@gmail.com&quot;&gt;
        &lt;i class=&quot;ri-mail-unread-line&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Icon Right --&gt;
&lt;div&gt;
    &lt;label for=&quot;iconrightInput&quot; class=&quot;form-label&quot;&gt;Input with Icon Right&lt;/label&gt;
    &lt;div class=&quot;form-icon right&quot;&gt;
        &lt;input type=&quot;email&quot; class=&quot;form-control form-control-icon&quot; id=&quot;iconrightInput&quot; placeholder=&quot;example@gmail.com&quot;&gt;
        &lt;i class=&quot;ri-mail-unread-line&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Date --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputdate&quot; class=&quot;form-label&quot;&gt;Input Date&lt;/label&gt;
    &lt;input type=&quot;date&quot; class=&quot;form-control&quot; id=&quot;exampleInputdate&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Time --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputtime&quot; class=&quot;form-label&quot;&gt;Input Time&lt;/label&gt;
    &lt;input type=&quot;time&quot; class=&quot;form-control&quot; id=&quot;exampleInputtime&quot; value=&quot;08:56 AM&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Password --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputpassword&quot; class=&quot;form-label&quot;&gt;Input Password&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputpassword&quot; value=&quot;44512465&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Example Textarea --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleFormControlTextarea5&quot; class=&quot;form-label&quot;&gt;Example Textarea&lt;/label&gt;
    &lt;textarea class=&quot;form-control&quot; id=&quot;exampleFormControlTextarea5&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Form Text --&gt;
&lt;div&gt;
    &lt;label for=&quot;formtextInput&quot; class=&quot;form-label&quot;&gt;Form Text&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;formtextInput&quot;&gt;
    &lt;div id=&quot;passwordHelpBlock&quot; class=&quot;form-text&quot;&gt;
        Must be 8-20 characters long.
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Color Picker --&gt;
&lt;div&gt;
    &lt;label for=&quot;colorPicker&quot; class=&quot;form-label&quot;&gt;Color Picker&lt;/label&gt;
    &lt;input type=&quot;color&quot; class=&quot;form-control form-control-color w-100&quot; id=&quot;colorPicker&quot; value=&quot;#364574&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Border Style --&gt;
&lt;div&gt;
    &lt;label for=&quot;borderInput&quot; class=&quot;form-label&quot;&gt;Input Border Style&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control border-dashed&quot; id=&quot;borderInput&quot; placeholder=&quot;Enter your name&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Datalist example --&gt;
&lt;label for=&quot;exampleDataList&quot; class=&quot;form-label&quot;&gt;Datalist example&lt;/label&gt;
&lt;input class=&quot;form-control&quot; list=&quot;datalistOptions&quot; id=&quot;exampleDataList&quot; placeholder=&quot;Search your country...&quot;&gt;
&lt;datalist id=&quot;datalistOptions&quot;&gt;
    &lt;option value=&quot;Switzerland&quot;&gt;
    &lt;option value=&quot;New York&quot;&gt;
    &lt;option value=&quot;France&quot;&gt;
    &lt;option value=&quot;Spain&quot;&gt;
    &lt;option value=&quot;Chicago&quot;&gt;
    &lt;option value=&quot;Bulgaria&quot;&gt;
    &lt;option value=&quot;Hong Kong&quot;&gt;
&lt;/datalist&gt;</code>

<code>&lt;!-- Rounded Input --&gt;
&lt;div&gt;
    &lt;label for=&quot;exampleInputrounded&quot; class=&quot;form-label&quot;&gt;Rounded Input&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control rounded-pill&quot; id=&quot;exampleInputrounded&quot; placeholder=&quot;Enter your name&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Floating Input --&gt;
&lt;div class=&quot;form-floating&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;firstnamefloatingInput&quot; placeholder=&quot;Enter your firstname&quot;&gt;
    &lt;label for=&quot;firstnamefloatingInput&quot;&gt;Floating Input&lt;/label&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <button type="submit" class="btn btn-info"> submit</button>

                    </div><!-- end card header -->


                </div>
                <!--end col-->
            </div>
    </form>

    <!-- end page title --






@endsection
@section('style-libs')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--datatable js-->
    <script src="https:////cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>

@endsection
@section('styles')

    <script>
        CKEDITOR.replace('content');
    </script>
@endsection

