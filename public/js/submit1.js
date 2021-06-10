$('#form-utama').submit(function() {
    let result = false;
    $('input[type=file]').each(function() {
        if (typeof this.files[0] !== undefined) {
            const maxSize = 10000000;
            size = this.files[0].size;
            if (maxSize < size) {
                alert('file size terlalu besar, pastikan file size <= 10 MB');
                result = false;
                return false;
            } else {
                result = true;
                return true;
            }
        }
    });
    return result;
})
