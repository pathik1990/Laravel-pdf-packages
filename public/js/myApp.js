const links = document.querySelectorAll('.copy-click');
const cls = {
    copied: 'is-copied',
    hover: 'is-hovered' };

const copyToClipboard = str => {
    const el = document.createElement('input');
    str.dataset.copyString ? el.value = str.dataset.copyString : el.value = str.text;
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.opacity = 0;
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
};

const clickInteraction = e => {
    e.preventDefault();
    copyToClipboard(e.target);
    e.target.classList.add(cls.copied);
    setTimeout(() => e.target.classList.remove(cls.copied), 1000);
    setTimeout(() => e.target.classList.remove(cls.hover), 700);
};

Array.from(links).forEach(link => {
    link.addEventListener('click', e => clickInteraction(e));

    link.addEventListener('keypress', e => {
        if (e.keyCode === 13) clickInteraction(e);
    });

    link.addEventListener('mouseover', e => e.target.classList.add(cls.hover));
        link.addEventListener('mouseleave', e => {
        if (!e.target.classList.contains(cls.copied)) {
            e.target.classList.remove(cls.hover);
        }
    });
});


$(".dial1").knob();
$({animatedVal: 0}).animate({animatedVal: $(".dial1").val()}, {
    duration: 2000,
    easing: "swing",
    step: function() {
        $(".dial1").val(Math.ceil(this.animatedVal)).trigger("change");
    }
});

$(".dial2").knob();
$({animatedVal: 0}).animate({animatedVal: 70}, {
    duration: 3000,
    easing: "swing",
    step: function() {
        $(".dial2").val(Math.ceil(this.animatedVal)).trigger("change");
    }
});

$(".dial3").knob();
$({animatedVal: 0}).animate({animatedVal: 90}, {
    duration: 3000,
    easing: "swing",
    step: function() {
        $(".dial3").val(Math.ceil(this.animatedVal)).trigger("change");
    }
});

$(".dial4").knob();
$({animatedVal: 0}).animate({animatedVal: 65}, {
    duration: 3000,
    easing: "swing",
    step: function() {
        $(".dial4").val(Math.ceil(this.animatedVal)).trigger("change");
    }
});

$('document').ready(function(){
    var el1 = document.getElementById('apiKeysTable');
    if(el1) {
        $('#apiKeysTable').DataTable({
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: true
            }],
            aaSorting: [[2, 'asc']],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language": {
                "info": "_START_-_END_ of _TOTAL_ entries",
                searchPlaceholder: "Search",
                paginate: {
                    next: '<i class="ion-chevron-right"></i>',
                    previous: '<i class="ion-chevron-left"></i>'
                }
            }
        });
    }

    var el2 = document.getElementById('usersTable');
    if(el2) {
        $('#usersTable').DataTable({
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: true
            }],
            aaSorting: [[0, 'asc']],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language": {
                "info": "_START_-_END_ of _TOTAL_ entries",
                searchPlaceholder: "Search",
                paginate: {
                    next: '<i class="ion-chevron-right"></i>',
                    previous: '<i class="ion-chevron-left"></i>'
                }
            }
        });
    }

    var el3 = document.getElementById('usersBusinessDetails');
    if(el3) {
        $('#usersBusinessDetails').DataTable({
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: true
            }],
            aaSorting: [[0, 'asc']],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language": {
                "info": "_START_-_END_ of _TOTAL_ entries",
                searchPlaceholder: "Search",
                paginate: {
                    next: '<i class="ion-chevron-right"></i>',
                    previous: '<i class="ion-chevron-left"></i>'
                }
            }
        });
    }

    var el4 = document.getElementById('orderDetails');
    if(el4) {
        $('#orderDetails').DataTable({
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: true
            }],
            aaSorting: [[0, 'asc']],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language": {
                "info": "_START_-_END_ of _TOTAL_ entries",
                searchPlaceholder: "Search",
                paginate: {
                    next: '<i class="ion-chevron-right"></i>',
                    previous: '<i class="ion-chevron-left"></i>'
                }
            }
        });
    }

    var el5 = document.getElementById('plansPackagesDetails');
    if(el5) {
        $('#plansPackagesDetails').DataTable({
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: true
            }],
            aaSorting: [[0, 'asc']],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language": {
                "info": "_START_-_END_ of _TOTAL_ entries",
                searchPlaceholder: "Search",
                paginate: {
                    next: '<i class="ion-chevron-right"></i>',
                    previous: '<i class="ion-chevron-left"></i>'
                }
            }
        });
    }

    $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"]
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $("#range_01").ionRangeSlider({
        min: 10,
        max: 1000,
        from: 0,
        type: "single",
        grid: true,
        step: 10,
        skin: "round",
        values: [10, 25, 50, 75, 100],
        onChange: function (data) {
            var max_val = data.from_value;
            $('files').text(max_val);
            $('#package_quantity').val(max_val);

            var price_range = parseInt(max_val) * parseFloat(6.99);
            $('price').text(price_range);
            $('#package_amount').val(price_range);
        }
    });

    var elems = Array.prototype.slice.call(document.querySelectorAll('.switch-btn'));
    $('.switch-btn').each(function() {
        new Switchery($(this)[0], $(this).data());
    });

    $(document).on("change", "#paypal_mode", function(){
        var current = $(this).prop('checked');
        if(current == true) {
            $(document).find(".paypal_sandbox").show();
            $(document).find(".paypal_live").hide();
            $(document).find("#paypal_mode_check").val(1);
        } else {
            $(document).find(".paypal_sandbox").hide();
            $(document).find(".paypal_live").show();
            $(document).find("#paypal_mode_check").val(0);
        }
    });

});

