@extends('layouts.app')

{{--@include('layouts.nav')--}}


@section('content')
    @include('layouts.tab')
    <div class="columns is-multiline h100" id="content">
        <div class="column is-11 is-offset-1 pr h95">
            <div class="columns pr h100" >
                <div class="column is-2 sidebar pr h70">

                    <aside class="menu h100">
                        <p class="menu-label">
                            <a href="#type1" class="button is-info is-active">type1</a>
                        </p>
                        <ul class="menu-list">
                            <li><a href="#website1">网址1</a></li>
                            <li><a>Customers</a></li>
                        </ul>
                        <p class="menu-label">
                            <a href="#type2" class="button is-info is-active">type2</a>
                        </p>
                        <ul class="menu-list">
                        </ul>
                        <p class="menu-label">
                            <a href="#type3" class="button is-info is-active">type3</a>
                        </p>
                        <ul class="menu-list">
                        </ul>

                        <div class="tile like">
                            {{--<a href="#like"><i class="fas fa-thumbs-up"></i></a>--}}
                            <span class="icon"><i class="fas fa-thumbs-up"></i></span>
                        </div>
                    </aside>
                </div>

                <div class="main column is-9 h85">

                    <div class="column is-full" id="type1">
                        <p  class="has-text-centered">Type1</p>
                    </div>
                    <hr>

                    <div class="columns  is-multiline">
                        <div class="column is-one-quarter">
                            <div class="card">
                                <div class="card-content">
                                    <p class="title" id="website1">
                                        “the website1 title.”
                                    </p>
                                    <p class="subtitle">
                                        Jeff Atwood
                                    </p>
                                </div>
                                <footer class="card-footer">
                                    <p class="card-footer-item">
                                      <span>
                                        View on <a href="#">Twitter</a>
                                      </span>
                                    </p>
                                </footer>
                            </div>
                        </div>
                        <div class="column is-one-quarter">
                            <div class="card">
                                <div class="card-content">
                                    <p class="title">
                                        “the website title.”
                                    </p>
                                    <p class="subtitle">
                                        Jeff Atwood
                                    </p>
                                </div>
                                <footer class="card-footer">
                                    <p class="card-footer-item">
                      <span>
                        View on <a href="#">Twitter</a>
                      </span>
                                    </p>
                                </footer>
                            </div>
                        </div>
                        <div class="column is-one-quarter">
                            <div class="card">
                                <div class="card-content">
                                    <p class="title">
                                        “the website title.”
                                    </p>
                                    <p class="subtitle">
                                        Jeff Atwood
                                    </p>
                                </div>
                                <footer class="card-footer">
                                    <p class="card-footer-item">
                      <span>
                        View on <a href="#">Twitter</a>
                      </span>
                                    </p>
                                </footer>
                            </div>
                        </div>
                        <div class="column is-one-quarter">
                            <div class="card">
                                <div class="card-content">
                                    <p class="title">
                                        “the website title.”
                                    </p>
                                    <p class="subtitle">
                                        Jeff Atwood
                                    </p>
                                </div>
                                <footer class="card-footer">
                                    <p class="card-footer-item">
                      <span>
                        View on <a href="#">Twitter</a>
                      </span>
                                    </p>
                                </footer>
                            </div>
                        </div>
                    </div>

                    <div class="column is-full">
                        <p id="type2">Type2</p>
                    </div>
                    <hr>

                    <div class="columns  is-multiline">
                        <div class="column is-one-quarter">
                            <div class="card">
                                <div class="card-content">
                                    <p class="title" id="website2">
                                        “the website2 title.”
                                    </p>
                                    <p class="subtitle">
                                        Jeff Atwood
                                    </p>
                                </div>
                                <footer class="card-footer">
                                    <p class="card-footer-item">
                                      <span>
                                        View on <a href="#">Twitter</a>
                                      </span>
                                    </p>
                                </footer>
                            </div>
                        </div>
                    </div>

                    <div class="column is-full">
                        <p id="type3">Type3</p>
                    </div>
                    <hr>

                    <div class="columns  is-multiline">
                        <div class="column is-one-quarter">
                            <div class="card">
                                <div class="card-content">
                                    <p class="title" id="website3">
                                        “the website3 title.”
                                    </p>
                                    <p class="subtitle">
                                        Jeff Atwood
                                    </p>
                                </div>
                                <footer class="card-footer">
                                    <p class="card-footer-item">
                                      <span>
                                        View on <a href="#">Twitter</a>
                                      </span>
                                    </p>
                                </footer>
                            </div>
                        </div>
                    </div>

                    <div class="column is-full">
                        <p id="type4">Type4</p>
                    </div>
                    <hr>

                    <div class="columns  is-multiline">
                        <div class="column is-one-quarter">
                            <div class="card">
                                <div class="card-content">
                                    <p class="title" id="website4">
                                        “the website4 title.”
                                    </p>
                                    <p class="subtitle">
                                        Jeff Atwood
                                    </p>
                                </div>
                                <footer class="card-footer">
                                    <p class="card-footer-item">
                                      <span>
                                        View on <a href="#">Twitter</a>
                                      </span>
                                    </p>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
