var jvalidate = $("#jvalidate").validate({
    ignore: [],
    rules: {
        login: {
            required: true,
            minlength: 2,
            maxlength: 8
        },
        email: {
            required: true,
            email: true
        },
        name: {
            required: true,
        },
        brand: {
            required: true,
        },
		 mission_name: {
            required: true,
        },
		Description: {
            required: true,
        },
        website: {
            required: true,
            url: true
        },
		demo_url: {
            required: true,
            url: true
        },
		video_url: {
            required: true,
            url: true
        },
        phone: {
            required: true,
            mobile: true
        },
		CategoryName:{
		required: true
		}
    }
});
