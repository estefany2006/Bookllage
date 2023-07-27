<x-layout>

    Te logeaste

    <form action="/logout" method="POST">
        @csrf
        <button class="btn btn-info mt-3 ">logout</button>
    </form>
</x-layout>
