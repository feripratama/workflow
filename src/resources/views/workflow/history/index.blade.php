<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">History</div>

                <div class="panel-body">
                  @if(Session::has('message'))
                      <div class="alert alert-info">
                          {{ Session::get('message') }}
                      </div>
                  @endif

                  <div class="table-responsive">
                    <table class="table table-bordered table-stripped">
                        <tr>
                            <th>Conten</th>
                            <th>Workflow</th>
                            <th>State From</th>
                            <th>State To</th>
                        </tr>
                        @foreach($historys as $history)
                            <tr>
                                <td>{{ $history->getApiKeys->client }}</td>
                                <td>{{ $history->getWorkflow->content_type }}</td>
                                <td>{{ $history->getStateFrom->label }}</td>
                                <td>{{ $history->getStateTo->label }}</td>
                            </tr>
                        @endforeach
                    </table>
                  </div>

                  {{ $historys->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
