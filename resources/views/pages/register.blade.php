@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')

<div class="container p-4 text-center">
    <h1>Регистрация</h1>
    <p>У вас есть аккаунт? <a href="#">войти</a></p>
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-light">Пациент</button>
        <button type="button" class="btn btn-light">Доктор</button>
        <button type="button" class="btn btn-primary">Клиника</button>
    </div>
    <div class="p-4" style="margin-left: auto; margin-right: auto; max-width: 30rem; text-align: left;">
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h4 class="pb-4">Клиника</h4>
            <div class="mb-3">
                <label for="cityInput" class="form-label">Город*</label>
                <select name="city" class="form-select" id="cityInput" aria-label="Default select example">
                    <option value="moscow">Москва</option>
                    <option value="st-peter">Санкт-Петербург</option>
                    <option value="kazan">Казань</option>
                </select>
            </div>
            <x-forum.group name="name" text="Название*" />
            <x-forum.group name="inn" text="ИНН*" />
            <x-forum.group name="adress" text="Адрес*" />
            <x-forum.group name="phone" text="Номер телефона*" type="tel" placeholder="+7 (___) ___-__-__" />
            <x-forum.group name="email" text="E-mail" type="email" />
            <x-forum.group name="site" text="Сайт" />
            <h4 class="py-4">Контаткное лицо</h4>
            <x-forum.group name="contactName" text="ФИО (полностью)*" />
            <x-forum.group name="contactPosition" text="Должность*" />
            <x-forum.group name="contactPhone" text="Номер телефона*" type="tel" placeholder="+7 (___) ___-__-__" />
            <x-forum.group name="contactEmail" text="E-mail" type="email" />
            <button class="btn btn-light" type="submit">Зарегистрироваться</button>
            <div class="form-check p-4">
                <input class="form-check-input" value="on" name="personalData" type="checkbox" value="" id="personalDataInput" aria-describedby="personalDataError" checked>
                <label class="form-check-label" for="personalDataInput">
                    Нажимая кнопку "Зарегистрироваться" ...
                </label>
                @error("personalData")<div id="personalDataError" class="form-text text-danger">{{ $message }}</div>@enderror
            </div>
        </form>
    </div>
</div>

@endsection