var base_url = window.location.protocol + "//" + window.location.host + "/";

//filter category
$('#tag-art').selectpicker({
    liveSearch: true
})
.ajaxSelectPicker({
    ajax: {
        url: base_url+'api/filter/tagarticle',
        data: function () {
            var el = this.plugin.$element;
            var params = {
                name: '{{{q}}}'
            };

            return params;
        },
        method: 'get'
    },
    locale: {
        emptyTitle: 'Search for tags...'
    },
    preprocessData: function(data){
        if(data.error)
            return [];

        data = data.data;
        var result = [];
        for(var i=0; i<data.length; i++){
            result.push({
                value: data[i].id,
                text: data[i].name,
                disabled: false
            });
        }

        return result;
    }
});
