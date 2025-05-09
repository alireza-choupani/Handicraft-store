<?php
$title = "سوالات متداول";
include("./includes/header.php");
?>

<!-- محتوای سوالات متداول -->
<div style="width: 800px; margin: 50px auto;" dir="rtl">
    <div class="card shadow border-0">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">سوالات متداول</h3>

            <div class="accordion" id="faqAccordion">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            چگونه می‌توانم یک محصول سفارش دهم؟
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            برای سفارش محصول، کافیست وارد صفحه‌ی محصول مورد نظر شده و با کلیک بر روی دکمه «افزودن به سبد خرید»، مراحل خرید را تکمیل نمایید.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            مدت زمان ارسال سفارش چقدر است؟
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            سفارش‌ها معمولاً طی ۳ تا ۵ روز کاری از طریق پست یا پیک ارسال می‌شوند، بسته به موقعیت جغرافیایی شما.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            آیا محصولات صنایع دستی شامل ضمانت هستند؟
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            بله، تمامی محصولات دارای ضمانت اصالت و سلامت فیزیکی هستند. در صورت وجود مشکل، می‌توانید تا ۷ روز پس از دریافت، محصول را بازگشت دهید.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            چطور می‌توانم با فروشگاه تماس بگیرم؟
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            از طریق صفحه <a href="contact.php">تماس با ما</a> یا با شماره تلفن درج‌شده در پایین سایت می‌توانید با پشتیبانی ما در ارتباط باشید.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
include("./includes/footer.php");
?>
