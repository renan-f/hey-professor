@props(['question'])

<div
    class="rounded dark:bg-gray-800/50 shadow shadow-blue-500/50 p-3 dark:text-gray-400 flex justify-between items-center">
    <span>{{ $question->question }}</span>
    <div>
        <x-form :action="route('question.like', $question)">
            <button class="text-green-500 flex items-start space-x-1">
                <x-icons.thumbs-up class="w-5 h-5 hover:text-green-300 cursor-pointer"/>
                <span>{{ $question->likes }}</span>
            </button>
        </x-form>
    </div>
</div>
