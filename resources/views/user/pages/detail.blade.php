@extends('user.layout.main')

@section('content')
<!-- Sart Single Product -->
<section class="gi-single-product py-[40px] max-[767px]:py-[30px]">
    <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full px-[12px]">
            <div class="gi-pro-rightside gi-common-rightside w-full">
                <!-- Single product content Start -->
                <div class="single-pro-block">
                    <div class="single-pro-inner">
                        <div class="flex flex-wrap w-full">
                            <div class="single-pro-img single-pro-img-no-sidebar w-[40%] max-[991px]:w-full relative pr-[12px] max-[991px]:pl-[12px] max-[991px]:w-full max-[991px]:max-w-[500px] max-[991px]:m-auto max-[420px]:px-[0]">
                                <div class="single-product-scroll p-[15px] sticky top-[30px] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                    <div class="single-product-cover overflow-hidden cursor-zoom-in rounded-[5px]">
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive" height="200px" src="{{ asset('art/'.$art->foto) }}" alt="">
                                        </div>
                                        {{-- <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive h-full w-full" src="assets/img/product-images/2_1.jpg" alt="">
                                        </div>
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive h-full w-full" src="assets/img/product-images/3_1.jpg" alt="">
                                        </div>
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive h-full w-full" src="assets/img/product-images/1_1.jpg" alt="">
                                        </div>
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive h-full w-full" src="assets/img/product-images/5_1.jpg" alt="">
                                        </div> --}}
                                    </div>
                                    {{-- <div class="single-nav-thumb w-full overflow-hidden">
                                        <div class="single-slide px-[11px] pt-[11px]">
                                            <img class="img-responsive h-full w-full border-[1px] border-solid border-transparent transition-all duration-[0.3s] ease delay-[0s] cursor-pointer rounded-[5px]" src="assets/img/product-images/4_1.jpg" alt="">
                                        </div>
                                        <div class="single-slide px-[11px] pt-[11px]">
                                            <img class="img-responsive h-full w-full border-[1px] border-solid border-transparent transition-all duration-[0.3s] ease delay-[0s] cursor-pointer rounded-[5px]" src="assets/img/product-images/2_1.jpg" alt="">
                                        </div>
                                        <div class="single-slide px-[11px] pt-[11px]">
                                            <img class="img-responsive h-full w-full border-[1px] border-solid border-transparent transition-all duration-[0.3s] ease delay-[0s] cursor-pointer rounded-[5px]" src="assets/img/product-images/3_1.jpg" alt="">
                                        </div>
                                        <div class="single-slide px-[11px] pt-[11px]">
                                            <img class="img-responsive h-full w-full border-[1px] border-solid border-transparent transition-all duration-[0.3s] ease delay-[0s] cursor-pointer rounded-[5px]" src="assets/img/product-images/1_1.jpg" alt="">
                                        </div>
                                        <div class="single-slide px-[11px] pt-[11px]">
                                            <img class="img-responsive h-full w-full border-[1px] border-solid border-transparent transition-all duration-[0.3s] ease delay-[0s] cursor-pointer rounded-[5px]" src="assets/img/product-images/5_1.jpg" alt="">
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single-pro-desc single-pro-desc-no-sidebar w-[60%] max-[991px]:w-full relative pl-[12px] max-[991px]:pl-[0] max-[991px]:mt-[30px] max-[991px]:w-full">
                                <div class="single-pro-content">
                                    <h5 class="gi-single-title text-[#4b5966] text-[22px] capitalize mb-[20px] block font-Poppins font-medium leading-[35px] tracking-[0.02rem] max-[1199px]:text-[20px] max-[1199px]:leading-[33px] max-[767px]:text-[18px] max-[767px]:text-[18px] max-[767px]:leading-[31px]">{{ $art->name }}</h5>
                                    <div class="gi-single-rating-wrap flex mb-[14px] items-center">
                                        {{-- <div class="gi-single-rating pr-[15px] leading-[17px]">
                                            <i class="gicon gi-star fill text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                            <i class="gicon gi-star fill text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                            <i class="gicon gi-star fill text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                            <i class="gicon gi-star fill text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                            <i class="gicon gi-star-o text-[#b2b2b2] float-left text-[14px] mr-[3px]"></i>
                                        </div>
                                        <span class="gi-read-review text-[#999] leading-[17px]">
                                            |&nbsp;&nbsp;<a href="#gi-spt-nav-review" class="text-[#999] text-[14px] leading-[20px] hover:text-[#5caf90]">992 Ratings</a>
                                        </span> --}}
                                    </div>

                                    {{-- <div class="gi-single-desc mb-[12px] text-[#777] text-[14px] tracking-[0] break-all leading-[26px] font-Poppins">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1990.</div> --}}
                                    <div class="gi-single-list">
                                        <ul class="mb-[30px] pl-[18px]">
                                            <li class="my-[10px] text-[#777] text-[14px] list-circle"><strong class="font-semibold">Jenis Kelamin :</strong> {{ $art->jenis_kelamin }}</li>
                                            <li class="my-[10px] text-[#777] text-[14px] list-circle"><strong class="font-semibold">Umur : </strong>
                                                {{-- // cari umur dari tgl lahir --}}
                                                @php
                                                $tgl_lahir = $art->tgl_lahir;
                                                $tgl_lahir = date('Y-m-d', strtotime($tgl_lahir));
                                                $tgl_lahir = new DateTime($tgl_lahir);
                                                $today = new DateTime('today');
                                                $umur = $today->diff($tgl_lahir);
                                                echo $umur->y . " Tahun";
                                                @endphp
                                            </li>
                                            <li class="my-[10px] text-[#777] text-[14px] list-circle"><strong class="font-semibold">Alamat : </strong> {{ $art->alamat }}</li>
                                            <li class="my-[10px] text-[#777] text-[14px] list-circle"><strong class="font-semibold">Status :</strong> {{ $art->status }}</li>
                                        </ul>
                                    </div>
                                    {{-- <div class="gi-pro-variation mb-[20px] pb-[5px]">
                                        <div class="gi-pro-variation-inner gi-pro-variation-size text-[16px] font-semibold text-[#4b5966] flex-col mb-[15px] flex">
                                            <span class="mb-[10px] text-[#202020] font-medium text-[15px] leading-[1.1] tracking-[0.04rem] uppercase font-Poppins block">Weight</span>
                                            <div class="gi-pro-variation-content">
                                                <ul>
                                                    <li class="active h-[22px] font-normal transition-all duration-[0.3s] ease-in-out py-[5px] px-[10px] cursor-pointer flex items-center justify-center text-[12px] leading-[22px] border-[1px] border-solid border-[#eee] float-left rounded-[5px]"><span class="">250g</span></li>
                                                    <li class="h-[22px] font-normal transition-all duration-[0.3s] ease-in-out ml-[10px] py-[5px] px-[10px] cursor-pointer flex items-center justify-center text-[12px] leading-[22px] border-[1px] border-solid border-[#eee] float-left rounded-[5px]"><span>500g</span></li>
                                                    <li class="h-[22px] font-normal transition-all duration-[0.3s] ease-in-out ml-[10px] py-[5px] px-[10px] cursor-pointer flex items-center justify-center text-[12px] leading-[22px] border-[1px] border-solid border-[#eee] float-left rounded-[5px]"><span>1kg</span></li>
                                                    <li class="h-[22px] font-normal transition-all duration-[0.3s] ease-in-out ml-[10px] py-[5px] px-[10px] cursor-pointer flex items-center justify-center text-[12px] leading-[22px] border-[1px] border-solid border-[#eee] float-left rounded-[5px]"><span>2kg</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gi-single-qty flex flex-wrap w-full m-[-5px]">
                                        <div class="qty-plus-minus w-[120px] h-[40px] p-[10px] border-[1px] border-solid border-[#eee] overflow-hidden m-[5px] relative flex items-center justify-between rounded-[5px]">
                                            <input class="qty-input" type="text" name="ms_qtybtn" value="1">
                                        </div>
                                        <div class="gi-single-cart">
                                            <button type="button" class="btn btn-primary gi-btn-1 flex h-[40px] leading-[50px] text-center text-[14px] m-[5px] py-[10px] px-[15px] uppercase justify-center bg-[#4b5966] text-[#fff] transition-all duration-[0.3s] ease-in-out relative rounded-[5px] items-center min-w-[160px] font-semibold tracking-[0.02rem] border-[0] hover:bg-[#5caf90] hover:text-[#fff]">Add To Cart</button>
                                        </div>
                                        <div class="gi-single-wishlist m-[5px]">
                                            <a class="gi-btn-group wishlist w-[40px] h-[40px] flex items-center justify-center transition-all duration-[0.3s] ease delay-[0s] text-[#17181c] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] hover:text-[#fff] hover:bg-[#5caf90] hover:border-[#5caf90]" title="Wishlist">
                                                <i class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#4b5966] leading-[0]"></i>
                                            </a>
                                        </div>
                                        <div class="gi-single-quickview m-[5px]">
                                            <a href="javascript:void(0)" class="gi-btn-group quickview w-[40px] h-[40px] flex items-center justify-center transition-all duration-[0.3s] ease delay-[0s] text-[#17181c] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] hover:text-[#fff] hover:bg-[#5caf90] hover:border-[#5caf90] modal-toggle">
                                                <i class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#4b5966] leading-[0]"></i>
                                            </a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single product content End -->
                <!-- Add More and get discount content Start -->

                <!-- Single product tab start -->
                {{-- <div class="gi-single-pro-tab mt-[40px]">
                    <div class="gi-single-pro-tab-wrapper flex flex-col">
                        <div class="gi-single-pro-tab-nav w-full m-auto relative block text-center float-left">
                            <ul class="nav-tabs inline-block float-left" id="singleprotab">
                                <li class="active mr-[5px] ml-auto mb-[5px] inline-block float-left">
                                    <a href="#gi-spt-nav-details" class="capitalize leading-[24px] py-[8px] px-[28px] m-[0] text-[15px] font-medium relative transition-all duration-[300ms] linear inline-block cursor-pointer bg-[#fff] text-[#4b5966] border-[1px] border-solid border-[#eee] rounded-[5px] leading-[0] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                        Detail
                                    </a>
                                </li>
                                <li class="mr-[5px] ml-auto mb-[5px] inline-block float-left">
                                    <a href="#gi-spt-nav-info" class="capitalize leading-[24px] py-[8px] px-[28px] m-[0] text-[15px] font-medium relative transition-all duration-[300ms] linear inline-block cursor-pointer bg-[#fff] text-[#4b5966] border-[1px] border-solid border-[#eee] rounded-[5px] leading-[0] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                        Specifications
                                    </a>
                                </li>
                                <li class="mr-[5px] ml-auto mb-[5px] inline-block float-left">
                                    <a href="#gi-spt-nav-vendor" class="capitalize leading-[24px] py-[8px] px-[28px] m-[0] text-[15px] font-medium relative transition-all duration-[300ms] linear inline-block cursor-pointer bg-[#fff] text-[#4b5966] border-[1px] border-solid border-[#eee] rounded-[5px] leading-[0] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                        Vendor
                                    </a>
                                </li>
                                <li class="mr-[5px] ml-auto mb-[5px] inline-block float-left">
                                    <a href="#gi-spt-nav-review" class="capitalize leading-[24px] py-[8px] px-[28px] m-[0] text-[15px] font-medium relative transition-all duration-[300ms] linear inline-block cursor-pointer bg-[#fff] text-[#4b5966] border-[1px] border-solid border-[#eee] rounded-[5px] leading-[0] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                        Reviews
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content transition-all w-full overflow-hidden bg-[#fff] text-left p-[30px] border-[1px] border-solid border-[#eee] text-[#202020] text-[18px] tracking-[0] leading-[1.6] rounded-[5px]" id="singleTabContent">
                            <div id="gi-spt-nav-details" class="tab-single-pane">
                                <div class="gi-single-pro-tab-desc">
                                    <p class="mb-[15px] text-[14px] tracking-[0] text-[#777] leading-[28px] font-normal font-Poppins">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                    <ul class="mb-[15px] pl-[24px]">
                                        <li class="list-disc text-[15px] mb-[4px] text-[#777]">Any Product types that You want - Simple, Configurable</li>
                                        <li class="list-disc text-[15px] mb-[4px] text-[#777]">Downloadable/Digital Products, Virtual Products</li>
                                        <li class="list-disc text-[15px] mb-[4px] text-[#777]">Inventory Management with Backordered items</li>
                                        <li class="list-disc text-[15px] mb-[4px] text-[#777]">Flatlock seams throughout.</li>
                                    </ul>
                                    <p class="font-Poppins mb-[15px] text-[14px] tracking-[0] text-[#777] leading-[28px] font-normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                    <p class="font-Poppins text-[14px] tracking-[0] text-[#777] leading-[28px] font-normal">There are many variations of passages of Lorem Ipsum available, but the
                                        majority have
                                        suffered alteration in some form, by injected humour, or randomised words
                                        which don't
                                        look even slightly believable. If you are going to use a passage of Lorem
                                        Ipsum,
                                        you need to be sure there isn't anything embarrassing hidden in the middle
                                        of text.
                                        All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                        chunks as necessary,
                                        making this the first true generator on the Internet. It uses a dictionary
                                        of over
                                        200 Latin words, combined with a handful of model sentence structures, to
                                        generate
                                        Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                                        always
                                        free from repetition, injected humour, or non-characteristic words etc.</p>
                                </div>
                            </div>
                            <div id="gi-spt-nav-info" class="tab-single-pane">
                                <div class="gi-single-pro-tab-moreinfo">
                                    <p class="font-Poppins text-[#777] text-[14px] font-normal leading-[28px] mb-[16px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries.
                                    </p>
                                    <ul class="pl-[24px]">
                                        <li class="list-disc mb-[4px] text-[15px] text-[#777] tracking-[0.02rem] leading-[1.6] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Model</span> SKU140</li>
                                        <li class="list-disc mb-[4px] text-[15px] text-[#777] tracking-[0.02rem] leading-[1.6] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Weight</span> 500 g</li>
                                        <li class="list-disc mb-[4px] text-[15px] text-[#777] tracking-[0.02rem] leading-[1.6] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Dimensions</span> 35 × 30 × 7 cm</li>
                                        <li class="list-disc mb-[4px] text-[15px] text-[#777] tracking-[0.02rem] leading-[1.6] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Color</span> Black, Pink, Red, White</li>
                                        <li class="list-disc mb-[4px] text-[15px] text-[#777] tracking-[0.02rem] leading-[1.6] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Size</span> 10 X 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="gi-spt-nav-vendor" class="tab-single-pane">
                                <div class="gi-single-pro-tab-moreinfo">
                                    <div class="gi-product-vendor">
                                        <div class="gi-vendor-info mb-[15px] flex flex-row">
                                            <span>
                                                <img src="assets/img/vendor/3.jpg" alt="vendor" class="w-[80px] mr-[15px] border-[1px] border-solid border-[#eee]">
                                            </span>
                                            <div>
                                                <h5 class="text-[15px] font-semibold text-[#4b5966]">Ocean Crate</h5>
                                                <p class="text-[#777] font-Poppins text-[14px] font-normal leading-[28px]">Products : 358</p>
                                                <p class="text-[#777] font-Poppins text-[14px] font-normal leading-[28px]">Sales : 5587</p>
                                            </div>
                                        </div>
                                        <div class="gi-detail">
                                            <ul class="mb-[15px] pl-[24px]">
                                                <li class="mb-[4px] text-[15px] list-disc text-[#777] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Phone No. :</span> +00 987654321</li>
                                                <li class="mb-[4px] text-[15px] list-disc text-[#777] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Email. :</span> Example@gmail.com</li>
                                                <li class="mb-[4px] text-[15px] list-disc text-[#777] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Address. :</span> 2548 Broaddus Maple Court, Madisonville
                                                    KY 4783, USA.</li>
                                            </ul>
                                            <p class="text-[#777] font-Poppins text-[14px] font-normal leading-[28px] tracking-[0.02rem]">Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since
                                                the
                                                1500s, when an unknown printer took a galley of type and scrambled
                                                it to
                                                make a type specimen book. It has survived not only five centuries,
                                                but also
                                                the leap into electronic typesetting, remaining essentially
                                                unchanged.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="gi-spt-nav-review" class="tab-single-pane">
                                <div class="flex flex-wrap w-full">
                                    <div class="gi-t-review-wrapper mt-[10px]">
                                        <div class="gi-t-review-item flex mb-[25px] pb-[25px] border-b-[1px] border-solid border-[#eee]">
                                            <div class="gi-t-review-avtar basis-[50px] grow-[0] shrink-[0] mr-[15px]">
                                                <img src="assets/img/user/1.jpg" alt="user" class="max-w-full rounded-[5px]">
                                            </div>
                                            <div class="gi-t-review-content">
                                                <div class="gi-t-review-top flex flex-col mb-[10px]">
                                                    <div class="gi-t-review-name text-[15px] m-[0] leading-[1.5] block text-[#4b5966]">Mariya Lykra</div>
                                                    <div class="gi-t-review-rating mt-[5px]">
                                                        <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                        <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                        <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                        <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                        <i class="gicon gi-star-o inline-block text-[#b2b2b2] float-left text-[14px] mr-[3px]"></i>
                                                    </div>
                                                </div>
                                                <div class="gi-t-review-bottom">
                                                    <p class="w-full text-[14px] text-[#777] font-normal">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a
                                                        type specimen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gi-t-review-item flex mb-[25px] pb-[25px] border-b-[1px] border-solid border-[#eee]">
                                            <div class="gi-t-review-avtar basis-[50px] grow-[0] shrink-[0] mr-[15px]">
                                                <img src="assets/img/user/2.jpg" alt="user" class="max-w-full rounded-[5px]">
                                            </div>
                                            <div class="gi-t-review-content">
                                                <div class="gi-t-review-top flex flex-col mb-[10px]">
                                                    <div class="gi-t-review-name text-[15px] m-[0] leading-[1.5] block text-[#4b5966]">Moris Willson</div>
                                                    <div class="gi-t-review-rating mt-[5px]">
                                                        <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                        <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                        <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                        <i class="gicon gi-star-o inline-block text-[#b2b2b2] float-left text-[14px] mr-[3px]"></i>
                                                        <i class="gicon gi-star-o inline-block text-[#b2b2b2] float-left text-[14px] mr-[3px]"></i>
                                                    </div>
                                                </div>
                                                <div class="gi-t-review-bottom">
                                                    <p class="w-full text-[14px] text-[#777] font-normal">Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a
                                                        type specimen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gi-ratting-content w-full">
                                        <h3 class="mb-[10px] text-[20px] font-semibold leading-[1] font-Poppins text-[#4b5966] tracking-[0.01rem]">Add a Review</h3>
                                        <div class="gi-ratting-form">
                                            <form action="#">
                                                <div class="gi-ratting-star flex mt-[5px] mb-[25px] items-center">
                                                    <span class="mr-[18px] text-[16px] text-[#777] tracking-[0.02rem]">Your rating:</span>
                                                    <div class="gi-t-review-rating">
                                                        <i class="gicon gi-star fill inline-block text-[18px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i class="gicon gi-star fill inline-block text-[18px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i class="gicon gi-star-o inline-block text-[18px] text-[#b2b2b2] float-left mr-[3px]"></i>
                                                        <i class="gicon gi-star-o inline-block text-[18px] text-[#b2b2b2] float-left mr-[3px]"></i>
                                                        <i class="gicon gi-star-o inline-block text-[18px] text-[#b2b2b2] float-left mr-[3px]"></i>
                                                    </div>
                                                </div>
                                                <div class="gi-ratting-input mb-[10px]">
                                                    <input name="your-name" placeholder="Name" type="text" class="text-[14px] rounded-[5px] w-full mb-[15px] py-[5px] px-[20px] outline-[0] border-[1px] border-solid border-[#eee] text-[#777] h-[50px]">
                                                </div>
                                                <div class="gi-ratting-input mb-[10px]">
                                                    <input name="your-email" placeholder="Email*" type="email" class="text-[14px] rounded-[5px] w-full mb-[15px] py-[5px] px-[20px] outline-[0] border-[1px] border-solid border-[#eee] text-[#777] h-[50px]" required>
                                                </div>
                                                <div class="gi-ratting-input form-submit">
                                                    <textarea name="your-commemt" placeholder="Enter Your Comment" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] h-[150px] p-[20px] mb-[15px] w-full outline-[0] text-[14px] rounded-[5px]"></textarea>
                                                    <button type="submit" class="gi-btn-2 transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" value="Submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- product details description area end -->
                @if(Auth::check ())
                <div class="gi-single-pro-tab mt-[40px]">
                    <div class="gi-single-pro-tab-wrapper flex flex-col">
                        <div class="gi-ratting-content w-full">
                            <h3 class="mb-[10px] text-[20px] font-semibold leading-[1] font-Poppins text-[#4b5966] tracking-[0.01rem]">Penyewaan</h3>
                            <div class="gi-ratting-form">
                                <form action="/user/sewa" method="POST">
                                    @csrf

                                    <input hidden name="id_art" value="{{ $art->id }}">
                                    <div class="gi-ratting-input mb-[10px]">
                                        <input readonly name="your-name" value="{{ Auth::user()->name }}" placeholder="Name" type="text" class="text-[14px] rounded-[5px] w-full mb-[15px] py-[5px] px-[20px] outline-[0] border-[1px] border-solid border-[#eee] text-[#777] h-[50px]">
                                    </div>
                                    <div class="gi-ratting-input mb-[10px]">
                                        <input readonly name="your-email" value="{{ Auth::user()->email }}" placeholder="Email*" type="email" class="text-[14px] rounded-[5px] w-full mb-[15px] py-[5px] px-[20px] outline-[0] border-[1px] border-solid border-[#eee] text-[#777] h-[50px]" required>
                                    </div>
                                    <div class="gi-ratting-input mb-[10px]">
                                        <input readonly name="your-phone" value="{{ Auth::user()->no_hp }}" placeholder="Phone*" type="text" class="text-[14px] rounded-[5px] w-full mb-[15px] py-[5px] px-[20px] outline-[0] border-[1px] border-solid border-[#eee] text-[#777] h-[50px]" required>
                                    </div>

                                    <div class="gi-ratting-input form-submit">
                                        <button type="submit" class="gi-btn-2 transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                @else
                {{-- // alert harus login dulu --}}

                <div class="gi-single-pro-tab mt-[40px]">
                    <div class="gi-single-pro-tab-wrapper flex flex-col">
                        <div class="gi-ratting-content w-full">
                            <h3 class="mb-[10px] text-[20px] font-semibold leading-[1] font-Poppins text-[#4b5966] tracking-[0.01rem]">Silahkan Login Terlebih Dahulu Untuk Melakukan Penyewaan</h3>
                        </div>
                    </div>
                </div>

                @endif
            </div>
        </div>
    </div>
</section>
<!-- End Single Product -->
@endsection
