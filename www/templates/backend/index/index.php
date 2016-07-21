<h3 class="page-title"> Главная
    <small></small>
</h3>
<br>
<div class="row">
    <div class="col-md-8">
        <form id="filter-form" action="" method="post">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-list font-dark"></i>
                        <span class="caption-subject bold uppercase"> Записки</span>
                    </div>
                    <div class="actions">
                            <div class="btn-group btn-group-devided">
                                <button class="btn green btn-outline btn-circle" type="button">
                                    <i class="fa fa-plus"></i>
                                </button>
                                <a class="btn red btn-outline btn-circle delete_phrases" href="#delete_modal" data-toggle="modal">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1" data-toggle="tab"> 1 лист </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="tab_1">
                            <div name="summernote" id="summernote_1"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $ = jQuery.noConflict();
    $(document).ready(function () {
        $("#summernote_1").summernote({
            height: 300,
            callbacks: {
                onInit: function () {
                    console.log('Summernote is launched');
                }
            }
        });
//        $('#summernote_1').on('summernote.keyup', function(we, e) {
//            console.log('Key is released:', e.keyCode);
//        });
//        var markupStr = $('#summernote_1').summernote('code');
    });
</script>
