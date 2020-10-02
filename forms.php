<?php include "includes/header.php"; ?>
<?php include "includes/menu.php"; ?>
<!-- start forms section -->
<section class="forms mb-5">
    <div class="container">
        <div class="form-block bg-white mt-4 ">
            <div class="serv-head">
                إضافه للخدمه
            </div>
            <div class="px-5 py-4">
                <div class="alert alert-success" role="alert">
                    <strong>رساله!</strong> رساله نصيه رساله نصيه رساله نصيه رساله نصيه رساله نصيه رساله نصيه
                    <i class="fas fa-close"></i>
                </div>
                <div class="alert alert-warning" role="alert">
                    <strong>رساله!</strong> رساله نصيه رساله نصيه رساله نصيه رساله نصيه رساله نصيه رساله نصيه
                    <i class="fas fa-close"></i>
                </div>
                <div class="alert alert-primary" role="alert">
                    <strong>رساله!</strong> رساله نصيه رساله نصيه رساله نصيه رساله نصيه رساله نصيه رساله نصيه
                    <i class="fas fa-close"></i>
                </div>
                <div class="alert alert-danger" role="alert">
                    <strong>رساله!</strong> رساله نصيه رساله نصيه رساله نصيه رساله نصيه رساله نصيه رساله نصيه
                    <i class="fas fa-close"></i>
                </div>

                <form>
                    <div class="form-group row">
                        <div class="col-12">
                            <label class="form-label"> سوف اقوم ب:<sup>*</sup> <i class="fas fa-lightbulb" data-toggle="tooltip" data-placement="left" title="نص نص نص نص نص"></i></label>
                            <input type="text" class="form-control" placeholder="حدد ما ستقدمه بوضوح , عنوان لا يقل عن 100 حرف" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 col-12">
                            <label class="form-label"> : القسم<sup>*</sup> </label>
                            <select class="custom-select">
                                <option selected>اختر القسم</option>
                                <option value="1">قسم1</option>
                                <option value="2">قسم2</option>
                                <option value="3">قسم3</option>
                              </select>
                        </div>
                        <div class="col-sm-6 col-12">
                            <label class="form-label"> القسم الفرعي:<sup>*</sup> </label>
                            <select class="custom-select">
                                <option selected>اختر القسم الفرعى</option>
                                <option value="1">قسم1</option>
                                <option value="2">قسم2</option>
                                <option value="3">قسم3</option>
                              </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label class="form-label"> : وصف الخدمه<sup>*</sup> </label>
                            <textarea class="form-control" placeholder="أدخل وصف الخدمة بدقة يتضمن جميع المعلومات والشروط . يمنع وضع البريد الالكتروني، رقم الهاتف أو أي معلومات اتصال أخرى."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label class="form-label"> : نص<sup>*</sup> </label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">ذكر</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">انثى</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label class="form-label"> : نص<sup>*</sup> </label>
                            <div class="custom-control custom-checkbox-inline">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">ذكر</label>
                            </div>
                            <div class="custom-control custom-checkbox-inline">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">انثى</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label class="form-label"> : نص<sup>*</sup> </label>
                            <div class="custom-control custom-switch-inline">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">انجليزيه</label>
                            </div>
                            <div class="custom-control custom-switch-inline">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">عربيه</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label class="form-label">الاوسمه:<sup>*</sup></label>
                            <div class="tags-block">
                                <input type="text" class="form-control">
                                <div class="row">
                                    <div class="col-10 px-0">
                                        <input class="form-control no-border mb-3 interest" placeholder="Add Medical ">

                                    </div>
                                    <div class="col-2 px-0">
                                        <button type="button" class="btn btn-success add-new2">+</button>
                                    </div>
                                </div>
                                <div class="tags">
                                    <span>وسم</span>
                                    <span>وسم</span>
                                    <span>وسم</span>
                                    <span>وسم</span>
                                    <span>وسم</span>
                                    <span>وسم</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-success w-4">أضف الخدمه</button>
                            <button class="btn btn-success w-4"><i class="fas fa-shopping-cart"></i> أضف الخدمه</button>
                            <button class="btn btn-outline-success w-4"><i class="fas fa-shopping-cart"></i> أضف الخدمه</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- end forms section -->
<?php include "includes/footer.php"; ?>