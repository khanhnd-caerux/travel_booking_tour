function actionDelete(event) {
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);
    console.log("____", that);

    Swal.fire({
        title: 'Bạn có chắc chắn muốn xoá không?',
        text: "Hãy liên hệ phía quản trị web nếu bạn có xoá nhầm",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        that.parent().parent().remove();
                        Swal.fire(
                            'Deleted!',
                            'Xoá thành công !',
                            'success'
                        )
                    }

                },
                error: function () {

                }
            });


        }
    })

}

$(function () {
    $(document).on('click', '.action_delete', actionDelete);
});
