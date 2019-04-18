@extends('front.master')
@section('title')
    House
@endsection
@section('body')
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                @foreach($house as $value)
                    <div class="row section_height">
                        <div class="col-md-6  border_right">
                            <h3>{{ $value->street }}</h3>
                            <p>{{ $value->city }}, {{ $value->state }} {{ $value->zip }}</p>
                            <p>Status: {{ $value->status }}</p>
                        </div>
                        <div class="col-md-2 border_right">
                            <p>{{ $value->price }}</p>
                            <p>Price</p>
                        </div>
                        <div class="col-md-2 border_right">
                            <p>{{ $value->bed }}</p>
                            <p>Beds</p>
                        </div>
                        <div class="col-md-2 border_baths">
                            <p>{{ $value->bath }}</p>
                            <p>Baths</p>
                        </div>

                    </div>
                    @break
                @endforeach

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                <div class="submit_offer">
                    <button class="btn btn-primary" onclick="popUpOffer()">Submit Offer</button>
                </div>


                <!-- Start slider Area -->
                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ asset('front') }}/img/spin.svg" />
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                        @foreach($house as $img)
                            <div>
                                <img data-u="image" src="{{ asset($img->image) }}" />
                                <div data-u="thumb">
                                    <img data-u="thumb" src="{{ asset($img->image) }}" />
                                </div>
                            </div>
                            @endforeach
                    </div>
                    <!-- Thumbnail Navigator -->
                    <div data-u="thumbnavigator" class="jssort111" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;cursor:default;" data-autocenter="1" data-scale-bottom="0.75">
                        <div data-u="slides">
                            <div data-u="prototype" class="p">
                                <div data-u="thumbnailtemplate" class="t"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:162px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:162px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div>
                </div>
                <!--End slider Area -->
            </div> <!-- col-md-6 end -->

            <div class="col-md-6 ">
                <div class="row ">
                    <div class="date_picker">
                        <form method="post" action="{{ url('/landing-house/leads/{street}/{id}') }}">
                            @csrf
                            <div class="initial_house_lead" id="initial_house_lead">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Go Tour This Home</label>
                                    <input type="text" name="house_id" value="{{ $value->house_id }}" hidden="hidden">
                                    <input type="text" name="street" value="{{ $value->street }}" hidden="hidden">
                                    <div id="input_alert_msg" class="alert alert-danger" role="alert">
                                        <p id="input_msg"></p>
                                    </div>
                                    <input id="appoint_date" type='text' name="appoint_date" class='form-control datepicker-here' data-language='en' data-inline="true" placeholder="Select date from calendar"/>
                                </div> <br><br>
                                <div class="form-group">
                                    <select id="appoint_time" class="form-control" name="appoint_time">
                                        <option selected disabled>Select Time</option>
                                        <option value="13:00">1:00 PM</option>
                                        <option value="13:30">1:30 PM</option>
                                        <option value="14:00">2:00 PM</option>
                                        <option value="14:30">2:30 PM</option>
                                        <option value="15:00">3:00 PM</option>
                                        <option value="15:30">3:30 PM</option>
                                        <option value="16:00">4:00 PM</option>
                                        <option value="16:30">4:30 PM</option>
                                        <option value="17:00">5:00 PM</option>
                                        <option value="17:30">5:30 PM</option>
                                        <option value="18:00">6:00 PM</option>
                                        <option value="18:30">6:30 PM</option>
                                        <option value="19:00">7:00 PM</option>
                                        <option value="19:30">7:30 PM</option>
                                        <option value="20:00">8:00 PM</option>
                                        <option value="20:30">8:30 PM</option>
                                        <option value="21:00">9:00 PM</option>
                                        <option value="21:30">9:30 PM</option>
                                        <option value="22:00">10:00 PM</option>
                                        <option value="22:30">10:30 PM</option>
                                        <option value="23:00">11:00 PM</option>
                                        <option value="23:30">11:30 PM</option>
                                        <option value="24:00">12:00 PM</option>

                                        <option value="01:00">1:00 AM</option>
                                        <option value="01:30">1:30 AM</option>
                                        <option value="02:00">2:00 AM</option>
                                        <option value="02:30">2:30 AM</option>
                                        <option value="03:00">3:00 AM</option>
                                        <option value="03:30">3:30 AM</option>
                                        <option value="04:00">4:00 AM</option>
                                        <option value="04:30">4:30 AM</option>
                                        <option value="05:00">5:00 AM</option>
                                        <option value="05:30">5:30 AM</option>
                                        <option value="06:00">6:00 AM</option>
                                        <option value="06:30">6:30 AM</option>
                                        <option value="07:00">7:00 AM</option>
                                        <option value="07:30">7:30 AM</option>
                                        <option value="08:00">8:00 AM</option>
                                        <option value="08:30">8:30 AM</option>
                                        <option value="09:00">9:00 AM</option>
                                        <option value="09:30">9:30 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="10:30">10:30 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="11:30">11:30 AM</option>
                                        <option value="12:00">12:00 AM</option>
                                    </select>
                                </div>
                                <input type="button" class="btn btn-primary" onclick="popUpOfferNext()" value="Next">
                            </div>

                            <div class="popup_house_lead" id="popup_house_lead">
                                <div class="form-group">
                                    <label for="offer_price">How much would you like to offer?</label>
                                    <input class="form-control" name="offer_price" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="offer_price">How do plan on buying?</label>
                                    <div>
                                        <label class="radio-inline">
                                            <input type="radio" name="buying_plan" value="cash" checked>Cash
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="buying_plan" value="cash">Loan
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="toured">Have you tored this home in person?</label>
                                    <div>
                                        <label class="radio-inline">
                                            <input type="radio" name="toured" value="yes" checked>Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="toured" value="no">No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label for="offer_price">Comments</label>
                                    </div>
                                    <textarea name="comment" id="comment" cols="45" rows="5"></textarea>
                                </div>

                                <br>
                                <button type="submit" class="btn btn-primary" >Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div><!-- col-md-6 end -->
        </div>
    </div>
@endsection

