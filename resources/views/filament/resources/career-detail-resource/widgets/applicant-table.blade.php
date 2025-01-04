<x-filament-tables::table :columns="$this->getTableColumns()" :records="$this->getTableQuery()->get()">
    <!-- This will render the table rows -->
</x-filament-tables::table>
