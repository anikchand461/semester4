# gaussian naive bayess from scratch

class NaiveBayes:

    def __init__(self):
        self.features = None

        self.p_yes = None
        self.p_no = None

        self.mean_yes = None
        self.mean_no = None

        self.std_yes = None
        self.std_no = None

    def fit(self, X, y):
        self.features = X.columns

        yes_data = X[y == 1]
        no_data = X[y == 0]

        # prior probabilities P(yes) and P(no)
        self.p_yes = len(yes_data) / len(X)
        self.p_no = len(no_data) / len(X)

        # mean and std for yes class
        self.mean_yes = yes_data.mean()
        self.std_yes = yes_data.std()

        # mean and std for no class
        self.mean_no = no_data.mean()
        self.std_no = no_data.std()

    def gaussian_probability(self, x, mean, std):
        exponent = np.exp(
            -((x - mean) ** 2) / (2 * (std ** 2))
        )
        return (1 / (std * np.sqrt(2 ** np.pi))) * exponent

    # predict one sample
    def predict_single(self, sample):

        # start with prior probabilities
        prob_yes = self.p_yes
        prob_no = self.p_no

        # calculate probability for yes
        for feature in self.features:
            prob_yes *= self.gaussian_probability(sample[feature], self.mean_yes[feature], self.std_yes[feature])

        # calculate probability for no
        for feature in self.features:
            prob_no *= self.gaussian_probability(sample[feature], self.mean_no[feature], self.std_no[feature])

        # return class with higher probability
        return 1 if prob_yes > prob_no else 0

    def predict(self, X):
        predictions = []

        for _, row in X.iterrows():

            prediction = self.predict_single(row)
            predictions.append(prediction)

        return np.array(predictions)
        