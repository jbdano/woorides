<?php
$PAGETITLE = 'WooRides | Contact Us';
$ACTIVEPAGE = 'contact';
$ROOTPATH = '../';

include $ROOTPATH.'config.php'; 
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <?php include $ROOTPATH.'head.php'; ?>
</head>

<body>

    <div id="contact-section">

        <form id="contact-form"
              class="lazy-fade lazy-fade-down">
            <div class="form-container">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="content-title">Call 508-966-8439 or fill out the form below for all inquiries.</h4>

                        <div class="alert alert-success hidden"
                             id="contact-submit-message">
                            <strong>Thank you for your request.</strong><br>It is being reviewed by our staff and we
                            will get back to you shortly.
                        </div>

                        <div class="form-group">
                            <label for="contact-form-firstName"
                                   class="contact-form-label">First Name</label>
                            <input type="text"
                                   class="form-control"
                                   name="firstName"
                                   id="contact-form-firstName">
                        </div>
                        <div class="form-group">
                            <label for="contact-form-lastName"
                                   class="contact-form-label">Last Name</label>
                            <input type="text"
                                   class="form-control"
                                   name="lastName"
                                   id="contact-form-lastName">
                        </div>
                        <div class="form-group">
                            <label for="contact-form-email"
                                   class="contact-form-label">Email</label>
                            <input type="email"
                                   class="form-control"
                                   name="email"
                                   id="contact-form-email">
                        </div>
                        <div class="form-group">
                            <label for="contact-form-phoneNumber"
                                   class="contact-form-label">Phone Number</label>
                            <input type="tel"
                                   class="form-control"
                                   name="phone"
                                   id="contact-form-phoneNumber">
                        </div>

                        <div class="form-group">
                            <label for="contact-form-serviceType"
                                   class="contact-form-label">Type of Inquiry</label>
                            <br>
                            <label class="service-item">Rides
                                <input type="radio"
                                       name="type"
                                       value="Rides"
                                       checked>
                                <span class="checkmark"></span>
                            </label>

                            <label class="service-item">Tours
                                <input type="radio"
                                       name="type"
                                       value="Tours">
                                <span class="checkmark"></span>
                            </label>

                            <label class="service-item">Transportation Services
                                <input type="radio"
                                       name="type"
                                       value="Transportation Services">
                                <span class="checkmark"></span>
                            </label>

                            <label class="service-item">Advertising
                                <input type="radio"
                                       name="type"
                                       value="Advertising">
                                <span class="checkmark"></span>
                            </label>

                            <label class="service-item">Community Space
                                <input type="radio"
                                       name="type"
                                       value="Community Space">
                                <span class="checkmark"></span>
                            </label>

                            <label class="service-item">Job Opportunities
                                <input type="radio"
                                       name="type"
                                       value="Job Opportunities">
                                <span class="checkmark"></span>
                            </label>

                            <label class="service-item">General
                                <input type="radio"
                                       name="type"
                                       value="General">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="rides_questions">
                            <div class="form-group">
                                <label for="contact-form-serviceDate"
                                       class="contact-form-label">Date of Service
                                    Requested</label>
                                <input class="form-control datepicker"
                                       name="serviceDate"
                                       id="contact-form-serviceDate">
                            </div>
                        </div>

                        <div class="hidden event_questions">
                            <div class="form-group">
                                <label for="contact-form-eventLocation"
                                       class="contact-form-label">Event Location</label>
                                <input type="text"
                                       class="form-control"
                                       name="eventLocation"
                                       id="contact-form-eventLocation">
                            </div>
                            <div class="form-group">
                                <label for="contact-form-eventStartTime"
                                       class="contact-form-label">Start Time</label>
                                <input type="time"
                                       class="form-control"
                                       name="eventStartTime"
                                       id="contact-form-eventStartTime">
                            </div>
                            <div class="form-group">
                                <label for="contact-form-eventEndTime"
                                       class="contact-form-label">End Time</label>
                                <input type="time"
                                       class="form-control"
                                       name="eventEndTime"
                                       id="contact-form-eventEndTime">
                            </div>
                        </div>

                        <div class="hidden advertise_questions">
                            <div class="form-group">
                                <label for="contact-form-orgName"
                                       class="contact-form-label">Business / Organization
                                    Name</label>
                                <input type="text"
                                       class="form-control"
                                       name="orgName"
                                       id="contact-form-orgName">
                            </div>
                            <div class="form-group">
                                <label class="contact-form-label">When do you want to run
                                    your ad?</label>
                                <div class="input-group input-daterange">
                                    <input type="text"
                                           name="advStart"
                                           class="form-control">
                                    <div class="input-group-addon">to</div>
                                    <input type="text"
                                           name="advEnd"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-form-advType"
                                       class="contact-form-label">Advertising
                                    Type</label>
                                <select type="time"
                                        class="form-control"
                                        name="advType"
                                        id="contact-form-advType">
                                    <option value="digital">Digital Ad</option>
                                    <option value="print">Print Ad</option>
                                    <option value="both">Both</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact-form-serviceDate"
                                   class="contact-form-label">A brief description of your
                                needs.</label>
                            <textarea type="text"
                                      class="form-control"
                                      name="message"
                                      id="contact-form-serviceDate"></textarea>
                        </div>

                        <input type="text"
                               class="form-control sub-input hidden"
                               id="contact-form-info"
                               name="info">
                    </div>
                    <div class="col-sm-12">
                        <a href="javascript:void(0)"
                           data-loading-text='<i class="fas fa-spin fa-spinner"></i>'
                           class="theme-btn-cta-secondary"
                           id="contact-form-submit">Submit</a>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <?php
    include $ASSETPATH.'components/global/Footer.php';
    include $ASSETPATH.'components/global/TopNavigation.php';
    include $ROOTPATH.'footer-scripts.php'; 
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script>
    $(document).ready(function() {

        $('#contact-form-serviceDate').datepicker({
            format: 'mm/dd/yyyy',
            autoclose: true,
            todayHighlight: true,
            title: 'Start Date'
        });

        $('.input-daterange input').each(function() {
            $(this).datepicker({
                format: 'mm/dd/yyyy',
                autoclose: true,
                todayHighlight: true,
                title: 'End Date'
            });
        });

        $('#contact-form input[name="type"]').on('change', function(e) {
            var serviceType = $(this).val();

            $('.rides_questions').addClass('hidden');
            $('.event_questions').addClass('hidden');
            $('.advertise_questions').addClass('hidden');

            if (serviceType == 'Transportation Services') {
                $('.event_questions').removeClass('hidden');
            } else if (serviceType == 'Advertising') {
                $('.advertise_questions').removeClass('hidden');
            } else if (serviceType == 'Rides' || serviceType == 'Tours') {
                $('.rides_questions').removeClass('hidden');
            }
        });

        $(document).on('click', '#contact-form-submit', function(e) {
            e.preventDefault();

            $form = $('#contact-form');
            $this = $(this);

            var submitText = $this.text();
            var validForm = false;
            var inputs = $form.serializeArray();

            $this.html($this.attr('data-loading-text'));

            if (inputs.length > 0) {

                var validForm = true;

                var type = inputs.find(function(input) {
                    return input.name === "type"
                });

                if (type === undefined) {
                    validForm = false;

                    bootbox.alert({
                        title: 'Uh oh!',
                        message: "Please choose a Type of Inquiry"
                    });
                } else {

                    var requiredInputs = ['firstName', 'lastName', 'email', 'message'];

                    switch (type.value) {
                        case 'Transportation Services':
                            requiredInputs.push('eventLocation', 'eventStartTime', 'eventEndTime');
                            break;
                        case 'Advertising':
                            requiredInputs.push('orgName', 'advStart', 'advEnd', 'advType');
                            break;
                        case 'Rides':
                            requiredInputs.push('serviceDate');
                            break;
                        case 'Tours':
                            requiredInputs.push('serviceDate');
                            break;
                    }
                }

                requiredInputs.forEach(function(key) {

                    $form.find('[name="' + key + '"]').closest('.form-group').removeClass(
                        'has-error');

                    var found = inputs.find(function(input) {
                        return input.name == key;
                    });

                    if (found == undefined || (found.value.trim() == '')) {

                        $form.find('[name="' + key + '"]').closest('.form-group').addClass(
                            'has-error');
                        validForm = false;
                    }
                });
            }

            if (validForm) {

                var params = $form.serialize();

                $.post('<?php echo $ROOTPATH ?>_Assets/server/functions.php', {
                    f: 'submitcontactform',
                    params: params
                }).then(function(response) {

                    var response = JSON.parse(response);

                    if (response.success) {
                        bootbox.alert({
                            title: 'Thank you for your message!',
                            message: "We will get back to you as soon as we can!"
                        });
                    } else {
                        bootbox.alert({
                            title: 'Uh oh!',
                            message: "An error occurred. Please try again later"
                        });
                    }

                    $form.trigger('reset');
                    $form.find('.has-error').removeClass('has-error');
                    $this.text(submitText);

                }, 'json');

            } else {
                $this.text(submitText);
            }
        });

    });
    </script>
</body>

</html>