import { useForm } from "@inertiajs/react";

export default function ProductModal({ categories, onClose }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        name: "",
        price: "",
        image: null,
        description: "",
        category_id: "",
    });

    const handleChange = (e) => {
        const { name, type, value, files } = e.target;
        setData(name, type === "file" ? files[0] : value);
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        post(route("products.store"), {
            onSuccess: () => {
                reset();
                onClose();
            },
        });
    };

    return (
        <div className="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
            <div className="bg-white p-6 rounded-lg w-96">
                <h2 className="text-xl font-bold mb-4">Ajouter un produit</h2>
                <form onSubmit={handleSubmit} encType="multipart/form-data">
                    <div className="mb-2">
                        <label className="block">Nom du produit</label>
                        <input
                            type="text"
                            name="name"
                            className="w-full p-2 border rounded"
                            value={data.name}
                            onChange={handleChange}
                            required
                        />
                        {errors.name && <p className="text-red-500 text-sm">{errors.name}</p>}
                    </div>

                    <div className="mb-2">
                        <label className="block">Prix</label>
                        <input
                            type="number"
                            name="price"
                            className="w-full p-2 border rounded"
                            value={data.price}
                            onChange={handleChange}
                            required
                        />
                        {errors.price && <p className="text-red-500 text-sm">{errors.price}</p>}
                    </div>

                    <div className="mb-2">
                        <label className="block">Catégorie</label>
                        <select
                            name="category_id"
                            className="w-full p-2 border rounded"
                            value={data.category_id}
                            onChange={handleChange}
                            required
                        >
                            <option value="">Sélectionner une catégorie</option>
                            {categories.map((category) => (
                                <option key={category.id} value={category.id}>{category.name}</option>
                            ))}
                        </select>
                        {errors.category_id && <p className="text-red-500 text-sm">{errors.category_id}</p>}
                    </div>

                    <div className="mb-2">
                        <label className="block">Image</label>
                        <input
                            type="file"
                            name="image"
                            className="w-full p-2 border rounded"
                            onChange={handleChange}
                            required
                        />
                        {errors.image && <p className="text-red-500 text-sm">{errors.image}</p>}
                    </div>

                    <div className="mb-2">
                        <label className="block">Description</label>
                        <textarea
                            name="description"
                            className="w-full p-2 border rounded"
                            value={data.description}
                            onChange={handleChange}
                        />
                        {errors.description && <p className="text-red-500 text-sm">{errors.description}</p>}
                    </div>

                    <div className="flex justify-between">
                        <button
                            type="submit"
                            className="bg-blue-500 text-white px-4 py-2 rounded"
                            disabled={processing}
                        >
                            {processing ? "Ajout en cours..." : "Ajouter"}
                        </button>
                        <button
                            type="button"
                            className="bg-gray-500 text-white px-4 py-2 rounded"
                            onClick={onClose}
                        >
                            Annuler
                        </button>
                    </div>
                </form>
            </div>
        </div>
    );
}
