import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Dashboard({ auth, stats }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Bienvenue, {auth.user.name}</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {/* Grid 2x3 */}
                    <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
                        {/* Nombre d'utilisateurs */}
                        <div className="bg-white shadow-md rounded-lg p-6 flex items-center">
                            <div className="p-4 bg-blue-500 text-white rounded-full">
                                <i className="fas fa-users text-2xl"></i>
                            </div>
                            <div className="ml-4">
                                <h3 className="text-lg font-semibold">Utilisateurs</h3>
                                <p className="text-2xl"></p>
                            </div>
                        </div>

                        {/* Nombre de produits */}
                        <div className="bg-white shadow-md rounded-lg p-6 flex items-center">
                            <div className="p-4 bg-green-500 text-white rounded-full">
                                <i className="fas fa-box text-2xl"></i>
                            </div>
                            <div className="ml-4">
                                <h3 className="text-lg font-semibold">Produits</h3>
                                <p className="text-2xl">{stats.products_count}</p>
                            </div>
                        </div>

                        {/* Nombre de commandes */}
                        <div className="bg-white shadow-md rounded-lg p-6 flex items-center">
                            <div className="p-4 bg-yellow-500 text-white rounded-full">
                                <i className="fas fa-shopping-cart text-2xl"></i>
                            </div>
                            <div className="ml-4">
                                <h3 className="text-lg font-semibold">Commandes</h3>
                                <p className="text-2xl"></p>
                            </div>
                        </div>

                        {/* Chiffre d'affaires */}
                        <div className="bg-white shadow-md rounded-lg p-6 flex items-center">
                            <div className="p-4 bg-red-500 text-white rounded-full">
                                <i className="fas fa-dollar-sign text-2xl"></i>
                            </div>
                            <div className="ml-4">
                                <h3 className="text-lg font-semibold">Revenus</h3>
                                <p className="text-2xl"> €</p>
                            </div>
                        </div>

                        
                        <div className="bg-white shadow-md rounded-lg p-6 flex items-center">
                            <div className="p-4 bg-indigo-500 text-white rounded-full">
                                <i class="fa-brands fa-product-hunt text-2xl"></i>
                            </div>
                            <div className="ml-4">
                                <h3 className="text-lg font-semibold">Produits Vendus</h3>
                                <p className="text-2xl"></p>
                            </div>
                        </div>

                        
                        <div className="bg-white shadow-md rounded-lg p-6 flex items-center">
                            <div className="p-4 bg-purple-500 text-white rounded-full">
                                <i className="fas fa-chart-line text-2xl"></i>
                            </div>
                            <div className="ml-4">
                                <h3 className="text-lg font-semibold">Trafic Mensuel</h3>
                                <p className="text-2xl"> visiteurs</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </AuthenticatedLayout>
    );
}
