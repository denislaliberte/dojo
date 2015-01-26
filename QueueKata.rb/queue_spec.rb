require './queue.rb'

describe "queue" do
  before(:each) do
    @queue = Queue.new()
  end
  it "new queue is empty" do
    expect(@queue.empty()).to eq(true)
  end
  it "is not empty when an item is push" do
    @queue.push(1)
    expect(@queue.empty()).to eq(false)
  end
  it "return an item" do
    @queue.push(1)
    expect(@queue.pop).to eq(1)
    expect(@queue.empty()).to eq(true)
  end
  it "two item queue" do
    @queue.push(1)
    @queue.push(2)
    expect(@queue.pop).to eq(1)
    expect(@queue.empty()).to eq(false)
    expect(@queue.pop).to eq(2)
  end
end
