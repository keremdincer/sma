
<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>#yagizyanindayiz</title>
	<meta name="description" content="Herkese merhaba!👋 Benim adım Yağız. Sma Tip 1 hastasıyım.">
	<meta name="keywords" content="smayagizgundogdu,smayagizyasasin,sma,destek,bağış,smatip1,tip 1">
	<meta name="author" content="">
	<!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  -->
	<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet" />
	<!--Replace with your tailwind.css once created-->
</head>

<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover flex justify-center p-4 sm:p-12"
	style="background-image:url('https://source.unsplash.com/1L71sPT5XKc');">
	
    <div class="w-full flex flex-col">
        <div class="overflow-x-auto">
            <div class="shadow border-b border-gray-200 rounded">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Seri No
                    </th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        İrtibat
                    </th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Adres
                    </th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Teslim Eden
                    </th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Teslim Tarihi
                    </th>
                    <th scope="col" class="relative px-4 py-2">
                        <span class="sr-only">Güncelle</span>
                    </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($boxes as $box)
                        <tr>
                        <td class="px-4 py-2 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            {{ $box->serial_no }}
                            </span>
                        </td>

                        <td class="px-4 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="">
                                    <div class="text-sm font-medium text-gray-900">
                                    {{ $box->contact_name }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                    {{ $box->contact_tel }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="px-4 py-2 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $box->location }}</div>
                            <div class="text-sm text-gray-500">{{ $box->address }} </div>
                        </td>

                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                            {{ $box->delivered_by }}
                        </td>

                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                            {{ $box->delivered_at }}
                        </td>

                        <td class="px-4 py-2 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Güncelle</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fixed z-10 inset-0 overflow-y-auto hidden" id="create-modal" aria-hidden="true" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 mx-4 sm:mx-0 sm:align-middle max-w-lg w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <h3 class="text-lg mb-4 leading-6 font-medium text-gray-900" id="modal-title">
                        Bağış Kutusu Ekle
                        </h3>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="/boxes" method="POST">
                                <div class="flex flex-col">
                                    <label class="pt-2 text-sm" for="serial_no">Seri Numarası:</label>
                                    <input id="serial_no" name="serial_no" type='number' required placeholder="Seri Numarası" class="px-2 py-1 border border-gray-400 rounded flex-1" />
                                </div>

                                <div class="flex flex-col">
                                    <label class="pt-2 text-sm" for="address">Adres:</label>
                                    <textarea id="address" name="address" rows="3" required placeholder="Adres" class="px-2 py-1 border border-gray-400 rounded flex-1"></textarea>
                                </div>

                                <div class="flex flex-col">
                                    <label class="pt-2 text-sm" for="location">Teslim Edilen Nokta:</label>
                                    <input id="location" name="location" type='text' required placeholder="Teslim Edilen Nokta" class="px-2 py-1 border border-gray-400 rounded flex-1" />
                                </div>

                                <div class="flex flex-col">
                                    <label class="pt-2 text-sm" for="contact_name">İrtibat Kişi:</label>
                                    <input id="contact_name" name="contact_name" type='text' required placeholder="İrtibat Kişi" class="px-2 py-1 border border-gray-400 rounded flex-1" />
                                </div>

                                <div class="flex flex-col">
                                    <label class="pt-2 text-sm" for="contact_tel">İrtibat Telefon:</label>
                                    <input id="contact_tel" name="contact_tel" type='tel' required placeholder="İrtibat Telefon" class="px-2 py-1 border border-gray-400 rounded flex-1" />
                                </div>

                                <div class="flex flex-col">
                                    <label class="pt-2 text-sm" for="delivered_by">Teslim Eden:</label>
                                    <input id="delivered_by" name="delivered_by" type='text' required placeholder="Teslim Eden" class="px-2 py-1 border border-gray-400 rounded flex-1" />
                                </div>

                                <div class="flex flex-col">
                                    <label class="pt-2 text-sm" for="delivered_at">Teslim Edilme Tarihi:</label>
                                    <input id="delivered_at" name="delivered_at" type='date' required placeholder="GG/AA/YYYY" class="px-2 py-1 border border-gray-400 rounded flex-1" />
                                </div>

                                <div class="bg-gray-50 pt-4 sm:flex sm:flex-row-reverse">
                                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                    Kaydet
                                    </button>
                                    <button type="button" class="close-modal mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                    Vazgeç
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="fixed right-0 bottom-0 p-6">
        <button
            id="create-modal-toggle"
                class="p-0 w-12 h-12 bg-blue-600 rounded-full hover:bg-blue-700 active:shadow-lg mouse shadow transition ease-in duration-200 focus:outline-none">
            <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-6 h-6 inline-block">
            <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
                                    C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
                                    C15.952,9,16,9.447,16,10z" />
            </svg>
        </button>
    </div>

    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
	<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <script>
        $('#create-modal-toggle').on('click', function () {
            $('#create-modal').toggleClass('hidden')
        })

        $('.close-modal').on('click', function () {
            $(this).closest('.modal').addClass('hidden')
        })
    </script>
</body>

</html>