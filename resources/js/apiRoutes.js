const scheme = 'http://',
    host = 'dev.theadmin',
    root = 'api',
    address = scheme + host + "/" + root;

const apiRoutes = {
    scheme: scheme,
    host: host,
    root: root,
    address: address,
    login: address + '/login'
};

export default {apiRoutes};
