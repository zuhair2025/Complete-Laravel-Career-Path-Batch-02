@extends('layouts.main')
@section('content')

<!-- Profile Edit Form -->

<form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-xl font-semibold leading-7 text-gray-900">
        Edit Profile
      </h2>
      <p class="mt-1 text-sm leading-6 text-gray-600">
        This information will be displayed publicly so be careful what you
        share.
      </p>

      <div class="mt-10 border-b border-gray-900/10 pb-12">
          <div class="col-span-full mt-10 pb-10">
            <label
              for="photo"
              class="block text-sm font-medium leading-6 text-gray-900"
              >Photo</label
            >
            <div class="mt-2 flex items-center gap-x-3">
              <input
                class="hidden"
                type="file"
                name="image"
                id="avatar" />
                <img
                class="h-32 w-32 rounded-full"
                src="{{ $user->image ? URL::asset('images/' . $user->image) : asset('images/default.png') }}"
                alt="{{ $user->first_name ?? 'user'}}"
            >
              <label for="avatar">
                <div
                  class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                  Change
                </div>
              </label>
            </div>
          </div>

        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label
              for="first-name"
              class="block text-sm font-medium leading-6 text-gray-900"
              >First name</label
            >
            <div class="mt-2">
              <input
                type="text"
                name="first_name"
                id="first-name"
                autocomplete="given-name"
                value="{{ $user->first_name }}"
                class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
            </div>
          </div>

          <div class="sm:col-span-3">
            <label
              for="last-name"
              class="block text-sm font-medium leading-6 text-gray-900"
              >Last name</label
            >
            <div class="mt-2">
              <input
                type="text"
                name="last_name"
                id="last-name"
                value="{{ $user->last_name }}"
                autocomplete="family-name"
                class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
            </div>
          </div>

          <div class="col-span-full">
            <label
              for="email"
              class="block text-sm font-medium leading-6 text-gray-900"
              >Email address</label
            >
            <div class="mt-2">
              <input
                id="email"
                name="email"
                type="email"
                autocomplete="email"
                value="{{ $user->email }}"
                class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
            </div>
          </div>

          <div class="col-span-full">
            <label
              for="password"
              class="block text-sm font-medium leading-6 text-gray-900"
              >Password</label
            >
            <div class="mt-2">
              <input
                type="password"
                name="password"
                id="password"
                autocomplete="password"
                class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
        </div>
      </div>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="col-span-full">
          <label
            for="bio"
            class="block text-sm font-medium leading-6 text-gray-900"
            >Bio</label
          >
          <div class="mt-2">
            <textarea
              id="bio"
              name="bio"
              rows="3"
              class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6">
Less Talk, More Code 💻</textarea
            >
          </div>
          <p class="mt-3 text-sm leading-6 text-gray-600">
            Write a few sentences about yourself.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a
      href="{{ route('home') }}"
      class="text-sm font-semibold leading-6 text-gray-900">
      Cancel
    </a>
    <button
      type="submit"
      class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
      Save
    </button>
  </div>
</form>
<!-- /Profile Edit Form -->
@endsection
