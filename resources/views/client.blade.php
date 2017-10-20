@extends('spark::layouts.app')
@section('content')
<client-list :user="user" inline-template>
    <div class="container">

        <!-- Loading -->
        <div class="row" v-show="!clientsLoaded">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Loading...</div>
                </div>
            </div>
        </div>

        <!-- No Activity -->
        <div class="row" v-show="clientsLoaded && clients.length == 0">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">No Clients</div>

                    <div class="panel-body">
                        Looks like you don't have any clients. Best find some!!
                    </div>
                </div>
            </div>
        </div>

        <!-- Client List -->
        <div class="row" v-show="clients.length > 0">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Clients</div>

                    <div class="panel-body">
                        <table class="table table-borderless m-b-none">
                            <thead>
                                <th>Name</th>
                                <th>Created</th>
                            </thead>

                            <tbody>
                                <tr v-for="client in clients">
                                    <!-- Message -->
                                    <td>
                                        <div class="btn-table-align">
                                            @{{ client.name }}
                                        </div>
                                    </td>

                                    <!-- Date -->
                                    <td>
                                        <div class="btn-table-align">
                                            @{{ client.created_at | datetime }}
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</client-list>
@endsection
