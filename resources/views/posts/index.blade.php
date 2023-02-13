<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('posts.create') }}" style="
                       align-items: center;
                       background-color: #0A66C2;
                       border: 0;
                       border-radius: 100px;
                       box-sizing: border-box;
                       color: #ffffff;
                       cursor: pointer;
                       display: inline-flex;
                       font-size: 16px;
                       font-weight: 600;
                       justify-content: center;
                       line-height: 20px;
                       max-width: 480px;
                       min-height: 40px;
                       min-width: 0px;
                       overflow: hidden;
                       padding: 0px;
                       padding-left: 20px;
                       padding-right: 20px;
                       text-align: center;
                       touch-action: manipulation;
                       transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
                       user-select: none;
                       -webkit-user-select: none;
                       vertical-align: middle;
                       :hover,{ 
                       background-color: #16437E;
                       color: #ffffff;
                    ">Add new post</a>
                    <br /><br />
                    <table >
                        <thead>
                            <tr>
                                <th style=" width: 150px;text-align: center;padding: 5px;">Title</th>
                                <th style="width: 150px;text-align: center;padding: 5px;">Category</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>
                                    <button style="background-color: rgba(35, 195, 45, 0.85);
                                             border-radius: 8px;
                                             border-width: 0;
                                             color: white;
                                             cursor: pointer;
                                             display: inline-block;
                                             font-size: 14px;
                                             font-weight: 500;
                                             line-height: 20px;
                                             list-style: none;
                                             margin-top: 10px;
                                             margin-left: 10px;
                                             padding: 10px 12px;
                                             text-align: center;
                                             transition: all 200ms;
                                             vertical-align: baseline;
                                             white-space: nowrap;
                                             user-select: none;
                                             -webkit-user-select: none;
                                             touch-action: manipulation;
                                         " ><a href="{{ route('posts.edit', $post) }}">Edit</a></button>
                                    <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure?')" style="background-color: rgba(251, 44, 44, 1);
                                             border-radius: 8px;
                                             border-width: 0;
                                             color: white;
                                             cursor: pointer;
                                             display: inline-block;
                                             font-size: 14px;
                                             font-weight: 500;
                                             line-height: 20px;
                                             list-style: none;
                                             margin-top: 10px;
                                             margin-left: 10px;
                                             padding: 10px 12px;
                                             text-align: center;
                                             transition: all 200ms;
                                             vertical-align: baseline;
                                             white-space: nowrap;
                                             user-select: none;
                                             -webkit-user-select: none;
                                             touch-action: manipulation;
                                         ">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
