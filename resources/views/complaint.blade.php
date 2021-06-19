@extends('layouts.app')

@section('content')

    <!-- Hero Start-->
    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center pt-50">
                        <h2>Complaint Form</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->
    <!-- About Details Start -->
    <div class="about-details section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle5 mb-80">
                        <span>General Complaint Form</span>
                        <h2>Kung isa kang OFW at kailangan mo ng tulong maari lamang lagdaan ang nararapat na
                            impormasyon sa ibaba.</h2>
                    </div>
                </div>
            </div>
            <form>
                <div class="row p-2">
                    <div class="col-md-12">
                        <h2 class="form-label">This complaint is for Agency</h2>
                        <select class="form-control">
                            @foreach($agencies as $key => $agency)
                                <option value="{{ $agency->id }}"
                                        @if($key == 0) selected @endif>{{ $agency->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <p class="fs-3"><u>General Information / Pangkalahatang Impormasyon</u></p>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">First Name / Pangalan</label>
                        <input type="text" class="form-control" name="first_name">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Middle Name / Gitnang Pangalan</label>
                        <input type="text" class="form-control" name="middle_name">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Last Name / Huling Pangalan</label>
                        <input type="text" class="form-control" name="last_name">
                    </div>
                    <div class="col-md-3">
                        <label class="">Gender / Kasarian</label>
                        <select class="form-control" name="gender">
                            <option>Male / Lalaki</option>
                            <option>Female / Babae</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label class="form-label">Passport Number</label>
                        <input type="text" class="form-control" name="passport">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">IQAMA / National ID</label>
                        <input type="text" class="form-control" name="national_id">
                    </div>
                    <div class="col-12">
                        <p class="fs-3"><u>Contact Information / Impormasyon sa Pakikipag-ugnay</u></p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Location / Lokasyon</label>
                        <input type="text" class="form-control" name="location_ksa">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email <i class="fa fa-asterisk" style="color: red"></i></label>
                        <input type="text" class="form-control" name="email_address">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Contact #1</label>
                        <input type="text" class="form-control" name="contact_number">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Contact #2</label>
                        <input type="text" class="form-control" name="contact_number2">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Person in case of emergency contact / Tao kung sakaling
                            magkaroon ng emergency contact</label>
                        <input type="text" class="form-control" name="contact_person">
                    </div>
                    <div class="col-12">
                        <p class="fs-3"><u>Job Information / Impormasyon sa Trabaho</u></p>
                    </div>
                    <div class="col-md-12">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="occupation"
                                   value="Household Service Workers" checked="">
                            <label class="form-check-label">
                                House Service Workers (e.g. Domestic Worker, Driver, Gardener etc.)
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="occupation" value="Highly Skilled">
                            <label class="form-check-label">
                                Highly Skilled (e.g. Wielder, Plumber, Beautician, Office Worker, Assistant
                                Nurse,
                                Computer Technician etc.)
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="occupation" value="Low Skilled">
                            <label class="form-check-label">
                                Low Skilled (e.g. Construction Worker, Laborers, Cook and Waiter etc.)
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="occupation" value="Nurse">
                            <label class="form-check-label">
                                Nurse
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="occupation" value="Skilled Professional">
                            <label class="form-check-label">
                                Skilled Professional (e.g. Engineer, Doctor, Dentist, Architects, Accountants
                                etc.)
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="occupation" value="Nurse">
                            <label class="form-check-label">
                                Sea-based
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="fs-3"><u>Employer Information /
                                Impormasyon ng Amo</u></p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Local Agency</label>
                        <input type="text" class="form-control" name="agency">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Abroad Agency</label>
                        <input type="text" class="form-control" name="host_agency">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Employer's IQAMA / National ID</label>
                        <input type="text" class="form-control" name="employer_national_id">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Employer Name / Pangalan ng Amo</label>
                        <input type="text" class="form-control" name="employer_name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Employer Contact / Numero ng Amo</label>
                        <input type="text" class="form-control" name="employer_contact">
                    </div>
                    <div class="col-12">
                        <p class="fs-3"><u>Complain Section / <i>Reklamo</i></u></p>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Please fill up below</label>
                        <textarea type="text" class="form-control" rows="8" name="complain"></textarea>
                    </div>
                    <div class="col-12">
                        <p class="fs-3"><u>Evidences / Ebidensya</u></p>
                    </div>
                    <div class="col-auto">
                        <label class="form-label">Image #1 / Unang Imahe</label>
                        <input class="form-control" type="file" name="image1">
                    </div>
                    <div class="col-auto">
                        <label class="form-label">Image #2 / Pangalawang Imahe</label>
                        <input class="form-control" type="file" name="image2">
                    </div>
                    <div class="col-auto">
                        <label class="form-label">Image #3 / Pangatlong Imahe</label>
                        <input class="form-control" type="file" name="image3">
                    </div>
                    <input class="form-control" name="actual_langitude" hidden="">
                    <input class="form-control" name="actual_longitude" hidden="">
                    <div class="col-12 mt-5">
                        <div class="d-grid gap-2">
                            <button class="btn btn-success">Submit / Ipasa</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- About Details End -->
@endsection
