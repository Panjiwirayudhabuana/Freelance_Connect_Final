@extends('admin.layout')

@section('konten')


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Client ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Budget
                </th>
                <th scope="col" class="px-6 py-3">
                    Deadline
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $index => $project)  
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                   
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $index + 1 }}
                    </th>
                  
                    <td class="px-6 py-4">
                        {{ $project->title}}
                    </td>

                    <td class="px-6 py-4">
                        {{ $project->description}}
                    </td>
                  
                    <td class="px-6 py-4">
                        {{ number_format($project->budget, 2) }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $project->deadline}}
                    </td>
                
                    <td class="px-6 py-4">
                        {{ ucfirst($project->status) }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <form id="delete-form-{{ $project->id }}" action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        <button 
                            type="button" 
                            class="font-medium text-red-600 dark:text-red-500 hover:underline" 
                            onclick="confirmDeletion({{ $project->id }})">
                            Delete
                        </button>
                    </td>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        function confirmDeletion(projectId) {
                            Swal.fire({
                                title: 'Yakin ingin menghapus ini?',
                                text: "Tindakan ini tidak dapat dibatalkan!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ya, hapus!',
                                cancelButtonText: 'Batal'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    document.getElementById(`delete-form-${projectId}`).submit();
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: "Your file has been deleted.",
                                        icon: "success"
                                    });
                                }
                            });
                        }
                    </script>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

