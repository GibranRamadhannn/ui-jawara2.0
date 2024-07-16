<div class="w-5/6 flex ml-12">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-xl">
            <thead>
                <tr>
                    <th
                        class=" border-gray-200 px-6 py-4 text-left text-xs font-medium text-text1 uppercase tracking-wider">
                        No</th>
                    <th
                        class=" border-gray-200 px-6 py-4 text-left text-xs font-medium text-text1 uppercase tracking-wider">
                        Action</th>
                    <th
                        class=" border-gray-200 px-6 py-4 text-left text-xs font-medium text-text1 uppercase tracking-wider">
                        ID</th>
                    <th
                        class=" border-gray-200 px-6 py-4 text-left text-xs font-medium text-text1 uppercase tracking-wider">
                        No PS</th>
                    <th
                        class="r border-gray-200 px-6 py-4 text-left text-xs font-medium text-text1 uppercase tracking-wider">
                        No PA</th>

                    <th
                        class=" border-gray-200 px-6 py-4 text-left text-xs font-medium text-text1 uppercase tracking-wider">
                        Nama Customer</th>
                    <th
                        class=" border-gray-200 px-6 py-4 text-left text-xs font-medium text-text1 uppercase tracking-wider">
                        Alamat</th>
                    <th
                        class=" border-gray-200 px-6 py-4 text-left text-xs font-medium text-text1 uppercase tracking-wider">
                        PIC</th>
                    <th
                        class=" border-gray-200 px-6 py-4 text-left text-xs font-medium text-text1 uppercase tracking-wider">
                        Mitra Aktivasi</th>
                    <th
                        class=" border-gray-200 px-6 py-4 text-left text-xs font-medium text-text1 uppercase tracking-wider">
                        Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @for ($i = 0; $i < 5; $i++)
                    <tr>
                        <td class="border border-gray-200 px-6 py-4 whitespace-nowrap">Data {{ $i + 1 }}</td>
                        <td class="border border-gray-200 px-6 py-4 whitespace-nowrap">Data {{ $i + 1 }}</td>
                        <td class="border border-gray-200 px-6 py-4 whitespace-nowrap">Data {{ $i + 1 }}</td>
                        <td class="border border-gray-200 px-6 py-4 whitespace-nowrap">Data {{ $i + 1 }}</td>
                        <td class="border border-gray-200 px-6 py-4 whitespace-nowrap">Data {{ $i + 1 }}</td>
                        <td class="border border-gray-200 px-6 py-4 whitespace-nowrap">Data {{ $i + 1 }}</td>
                        <td class="border border-gray-200 px-6 py-4 whitespace-nowrap">Data {{ $i + 1 }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
